<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    private $NewsModel;

    public function __construct(News $newsModel)
    {
        $this->NewsModel = $newsModel;
    }

    public function index()
    {
        return view('news.index', ['news' => $this->NewsModel->getAll()]);
    }

    public function show($id)
    {
        if (!$this->NewsModel->checkNewsExistById($id)) {
            return redirect()->route('news.index');
        }
        return view('news.show', ['id' => $id]);
    }

    public function create(Request $request)
    {
        //todo проверка прав доступа
        if ($request->isMethod('get')) {
            return view('news.create');
        }
        if ($request->isMethod('post')) {
            $data = [
                'title' => $request->input('title') ?? '',
                'content' => $request->input('content') ?? '',
                'author' => $request->input('author') ?? 'Anonymous',
                'category_id' => $request->input('category_id') ?? 0,
                'private' => (bool)$request->input('private'),
            ];

            $img = $request->file('image');

            //todo валидация данных
            if ($data['title'] === '' || $data['content'] === '') {
                return view('news.create');//todo ошибка
            }

            $new_id = $this->NewsModel->createNew($data, $img);

            session()->flash('alert', 'Новость успешно создана');

            return redirect()->route('news.show', ['id' => $new_id]);
        }
    }

    public function download(Request $request, ?int $id = null)
    {
        //todo проверка прав доступа
        if ($request->isMethod('get')) {
            if ($id === null) {
                return view('news.download');
            }

            $data = (array)$this->NewsModel->getNewsById($id);

            if (empty($data)) {
                return redirect()->route('news.download');
            }

            return response()->json($data, 200, [
                'Content-Disposition' => 'attachment; filename="news_' . $id . '.json"',
                'Content-Type' => 'application/json'
            ], JSON_PRETTY_PRINT);
        }

        if ($request->isMethod('post')) {
            $categoryId = $request->input('category_id');

            if (empty($categoryId)) {
                return redirect()->route('news.download')->with('error', 'Категория не указана');
            }

            $data = $this->NewsModel->getNewsByCategoryId($categoryId);

            if (empty($data)) {
                return redirect()->route('news.download')->with('error', 'Новости не найдены');
            }

            return response()->json($data, 200, [
                'Content-Disposition' => 'attachment; filename="news_category_' . $categoryId . '.json"',
                'Content-Type' => 'application/json'
            ], JSON_PRETTY_PRINT);
        }

        return redirect()->route('news.download');
    }
}
