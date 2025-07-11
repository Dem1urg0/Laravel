<?php
require_once __DIR__ . "/layout/menubar.php";
?>

<style>
body {
  font-family: sans-serif;
  background-color: #f4f4f4;
  color: #333;
  margin: 0;
  padding: 20px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.news-item {
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
  margin-bottom: 20px;
}

.news-item:last-child {
  border-bottom: none;
  margin-bottom: 0;
}

h1, h2 {
  color: #333;
}

.news-date {
    color: #777;
    font-size: 0.9em;
    margin-bottom: 10px;
}
</style>

<div class="container">
  <h1>Новости</h1>

  <div class="news-item">
    <h2>Заголовок новости</h2>
    <p class="news-date">Опубликовано: 11 июля 2025</p>
    <p>Это текст примера новости. Здесь вы можете разместить полное содержание статьи, включая любые детали, изображения или ссылки, которые могут быть интересны вашим читателям.</p>
    <p>Можно добавлять несколько параграфов, чтобы структурировать текст и сделать его более читабельным.</p>
  </div>

  <!-- Сюда можно будет добавлять другие новости по аналогии -->

</div>
