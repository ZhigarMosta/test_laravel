<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/app.css">
    <link rel="stylesheet" href="/style/header_footer.css">
    <link rel="stylesheet" href="/style/home.css">
</head>
<body>
    <header class="header">
      <div class="container">
        <input
          id="menu_toggle"
          name="menu_toggle"
          class="menu_toggle"
          type="checkbox"
        />
        <div class="logo__wrapper">
          <img class="img" src="/img/logo1.svg" alt="logo" />
          <label class="menu_button_container" htmlFor="menu_toggle">
            <div class="menu_button"></div>
          </label>
        </div>
        <div class="wrapper">
          <div class="menu">
          <a class="text" href="{{route('home')}}">Главная</a>
          <a class="text" href="{{route('array')}}">Массивы</a>
          </div>
        </div>
      </div>
    </header>
    <main>
      Вы на главной странице, увы, но тут ничего нет :((((((
    </main>
    <footer class="container_footer">
      <div class="main_footer__container">
      <img class="logo" src="/img/logo1.svg" alt="logo" />
        <div class="right__container">
          <div class="navigation__container">
            <a class="text" href="{{route('home')}}">Главная</a>
            <a class="text" href="{{route('array')}}">Массивы</a>
          </div>
        </div>
      </div>
      <p class="protected">
        ©️ Жигарь Кирилл Евгеньевич П-41 2024. Все права защищены
      </p>
    </footer>
</body>
</html>