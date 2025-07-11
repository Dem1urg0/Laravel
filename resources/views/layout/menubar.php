<?php

?>
<style>
.menubar {
  background-color: #333;
  overflow: hidden;
  font-family: sans-serif;
  border-radius: 8px;
  margin-bottom: 20px;
}

.menubar ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  justify-content: center;
}

.menubar li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  transition: background-color 0.3s;
}

.menubar li a:hover {
  background-color: #555;
}
</style>

<nav class="menubar">
  <ul>
    <li><a href="/index">Главная</a></li>
    <li><a href="/about">О проекте</a></li>
    <li><a href="/news">Новости</a></li>
  </ul>
</nav>
