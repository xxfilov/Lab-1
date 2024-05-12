document.addEventListener("DOMContentLoaded", function () {
  function ClearButtonOne() {  // функция скрывает превью аватара, устанавливает изображение по умолчанию для аватара, показывает другой элемент-заглушку, скрывает кнопку очистки и кнопку загрузки нового изображения, и показывает кнопку загрузки изображения.
    previewAvatar.style.display = "none";
    avatarPrev.src = "../src/images/admin/background.jpg";
    nonePrev.style.display = "block";
    clearButtonOne.style.display = "none";
    uploadNewButtonOne.style.display = "none";
    uploadButton.style.display = "block";
  }

  function ClearButtonTwo() { //  Эта функция скрывает превью главного изображения, устанавливает изображение по умолчанию для главного изображения, скрывает кнопку очистки и кнопку загрузки нового изображения, и показывает другие элементы на странице.
    previewHero.style.display = "none";
    previewHeroMinOne.src = "../src/images/admin/background.jpg";
    clearButtonTwo.style.display = "none";
    uploadNewButtonTwo.style.display = "none";
    imgSizeOne.style.display = "block";
    heroPrevNone.style.display = "block";
  }

  function ClearButtonThree() { //  Эта функция выполняет аналогичные действия для миниатюрного главного изображения, устанавливая изображение по умолчанию и переключая видимость кнопок и элементов на странице.
    previewHeroMin.style.display = "none";
    previewHeroMinTwo.src = "../src/images/admin/background.jpg";
    clearButtonThree.style.display = "none";
    uploadNewButtonThree.style.display = "none";
    imgSizeTwo.style.display = "block";
    heroImageMinNone.style.display = "block";
  }

  function uploadImage() { // Эта функция используется для загрузки изображения на страницу. Проверяется, что файлы были выбраны для загрузки, и затем устанавливается превью изображения аватара, изменяется изображение аватара и другие элементы на странице отображаются или скрываются в зависимости от загруженного изображения.
    if (this.files && this.files.length) {
      previewAvatar.src = window.URL.createObjectURL(this.files[0]);
      avatarPrev.src = window.URL.createObjectURL(this.files[0]);
      avatarPrev.style.display = "block";
      previewAvatar.style.display = "block";
      nonePrev.style.display = "none";
      clearButtonOne.style.display = "inline-block";
      uploadButton.style.display = "none";
      uploadNewButtonOne.style.display = "block";
    }
  }

  function uploadHeroImage() {  //  Эта функция загружает главное изображение на страницу. Она проверяет, что файлы были выбраны для загрузки, устанавливает превью главного изображения и превью миниатюрного главного изображения в значение URL созданного объекта из загруженного файла, отображает миниатюрное главное изображение и скрывает другие элементы на странице в зависимости от загруженного изображения.
    if (this.files && this.files.length) {
      previewHero.src = window.URL.createObjectURL(this.files[0]);
      previewHeroMinOne.src = window.URL.createObjectURL(this.files[0]);
      previewHeroMinOne.style.display = "block";
      heroPrevNone.style.display = "none";
      previewHero.style.display = "block";
      imgSizeOne.style.display = "none";
      uploadNewButtonTwo.style.display = "inline-block";
      clearButtonTwo.style.display = "inline-block";
    }
  }

  function uploadHeroImageMin() {  // Эта функция аналогично загружает миниатюрное изображение главного изображения на страницу. Она также проверяет, что файлы были выбраны для загрузки, устанавливает превью миниатюрного изображения и другого миниатюрного изображения главного изображения в значение URL созданного объекта из загруженного файла, скрывает элемент заглушку для миниатюрного главного изображения и отображает миниатюрное изображение, а также скрывает или отображает другие элементы на странице.
    if (this.files && this.files.length) {
      previewHeroMin.src = window.URL.createObjectURL(this.files[0]);
      previewHeroMinTwo.src = window.URL.createObjectURL(this.files[0]);
      heroImageMinNone.style.display = "none";
      previewHeroMin.style.display = "block";
      imgSizeTwo.style.display = "none";
      uploadNewButtonThree.style.display = "inline-block";
      clearButtonThree.style.display = "inline-block";
    }
  }

  //  И так далее для остальных констант. Каждая константа представляет собой ссылку на HTML-элемент, который будет использоваться в соответствующих функциях для управления загрузкой изображений и их отображением на странице.
  const input = document.getElementById("avatar");
  const previewAvatar = document.getElementById("preview");
  const nonePrev = document.getElementById("nonePreview");
  const avatarPrev = document.getElementById("avatarPrev");
  const uploadButton = document.getElementById("uploadBtn");
  const uploadNewButtonOne = document.getElementById("uploadNew");
  const clearButtonOne = document.getElementById("clearButton");
  input.addEventListener("change", uploadImage);
  clearButtonOne.addEventListener("click", ClearButtonOne);

  const heroImage = document.getElementById("heroImage");
  const previewHero = document.getElementById("previewHero");
  const heroPrevNone = document.getElementById("previewHeroNone");
  const previewHeroMinOne = document.getElementById("previewHeroMinOne");
  const imgSizeOne = document.getElementById("imgSizeOne");
  const clearButtonTwo = document.getElementById("clearTwoButton");
  const uploadNewButtonTwo = document.getElementById("uploadTwoNew");
  heroImage.addEventListener("change", uploadHeroImage);
  clearButtonTwo.addEventListener("click", ClearButtonTwo);

  const heroImageMin = document.getElementById("heroImageMin");
  const previewHeroMin = document.getElementById("previewHeroMin");
  const heroImageMinNone = document.getElementById("heroImageMinNone");
  const previewHeroMinTwo = document.getElementById("previewHeroMinTwo");
  const imgSizeTwo = document.getElementById("imgSizeTwo");
  const clearButtonThree = document.getElementById("clearThreeButton");
  const uploadNewButtonThree = document.getElementById("uploadThreeNew");
  heroImageMin.addEventListener("change", uploadHeroImageMin);
  clearButtonThree.addEventListener("click", ClearButtonThree);

  let titlePreview = document.getElementById("title"); //  Этот фрагмент кода устанавливает слушателя события изменения на элементе с идентификатором "title". Когда значение поля изменяется, текстовое содержимое элемента с идентификатором "titlePrev" и "titlePrevTwo" устанавливается равным значению поля "title". В зависимости от того, есть ли значение в поле "title", устанавливается цвет фона и стиль границы для этого поля.
  titlePreview.addEventListener("change", function () {
    document.getElementById("titlePrev").innerText = titlePreview.value;
    document.getElementById("titlePrevTwo").innerText = titlePreview.value;
    if (titlePreview.value.length != "") {
      titlePreview.style.background = "#f7f7f7";
      titlePreview.style.borderBottom = "1px solid #2e2e2e";
    } else {
      titlePreview.style.background = "#fff";
      titlePreview.style.borderBottom = "1px solid #eaeaea";
    }
  });

  let subtitlePreview = document.getElementById("subtitle"); // Здесь устанавливается слушатель события изменения для элемента с идентификатором "subtitle". Аналогично действиям с полем "title", текстовое содержимое элементов с идентификаторами "subtitlePrev" и "subtitlePrevTwo" устанавливается равным значению поля "subtitle". Также меняется цвет фона и стиль границы в зависимости от наличия значения в поле "subtitle".
  subtitlePreview.addEventListener("change", function () {
    document.getElementById("subtitlePrev").innerText = subtitlePreview.value;
    document.getElementById("subtitlePrevTwo").innerText =
      subtitlePreview.value;
    if (subtitlePreview.value != "") {
      subtitlePreview.style.background = "#f7f7f7";
      subtitlePreview.style.borderBottom = "1px solid #2e2e2e";
    } else {
      subtitlePreview.style.background = "#fff";
      subtitlePreview.style.borderBottom = "1px solid #eaeaea";
    }
  });

  let authorPreview = document.getElementById("author"); //  Здесь устанавливается слушатель события изменения для элемента с идентификатором "author". При изменении значения поля "author", текстовое содержимое элемента с идентификатором "authorPrev" устанавливается равным значению поля "author". Также меняется цвет фона и стиль границы поля "author".
  authorPreview.addEventListener("change", function () {
    document.getElementById("authorPrev").innerText = authorPreview.value;
    if (authorPreview.value != "") {
      authorPreview.style.background = "#f7f7f7";
      authorPreview.style.borderBottom = "1px solid #2e2e2e";
    } else {
      authorPreview.style.background = "#fff";
      authorPreview.style.borderBottom = "1px solid #eaeaea";
    }
  });

  let inputDate = document.getElementById("date"); //  Этот фрагмент кода устанавливает слушатель события изменения для элемента с идентификатором "date". При изменении значения в поле "date", происходит форматирование этой даты и отображение ее в элементе с идентификатором "datePrev". Также цвет фона и стиль границы поля "date" меняются в зависимости от наличия значения в нем.
  inputDate.addEventListener("change", function () {
    var date = new Date(inputDate.value);
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    var formattedDate = `${day < 10 ? "0" + day : day}/${
      month < 10 ? "0" + month : month
    }/${year}`;
    document.getElementById("datePrev").innerText = formattedDate;
    if (inputDate.value != "") {
      inputDate.style.background = "#f7f7f7";
      inputDate.style.borderBottom = "1px solid #2e2e2e";
    } else {
      inputDate.style.background = "#fff";
      inputDate.style.borderBottom = "1px solid #eaeaea";
    }
  });
  const msgError = document.querySelector(".main__msg-error");
  const msgSubmit = document.querySelector(".main__msg-submit");

  function isValidateForm() {  // проверяет, заполнены ли все обязательные поля ввода на форме. Если какое-либо из обязательных полей не заполнено, функция выполняет следующие действия: 1. Устанавливает красное подчеркивание (стиль границы) для поля ввода, которое не заполнено, и отображает соответствующее сообщение об ошибке. 2. Показывает блок с сообщением об ошибке и скрывает блок с сообщением об успешной отправке формы. 3. Возвращает false, что означает, что форма не прошла валидацию. Если все обязательные поля заполнены, функция: 1. Показывает блок с сообщением об успешной отправке формы. 2. Скрывает блок с сообщением об ошибке. 3. Скрывает сообщения о необходимости заполнения обязательных полей. 4. Возвращает true, что означает, что форма успешно прошла валидацию. Эта функция проверяет заполнение обязательных полей на форме и управляет отображением сообщений об ошибках и успешной отправке.
    let title = document.getElementById("title").value;
    let subtitle = document.getElementById("subtitle").value;
    let avatar = document.getElementById("avatar").value;
    let author = document.getElementById("author").value;
    let date = document.getElementById("date").value;
    let heroImg = document.getElementById("heroImageMin").value;
    let heroImgMin = document.getElementById("heroImageMin").value;
    if (
      title === "" ||
      subtitle === "" ||
      avatar === "" ||
      author === "" ||
      date === "" ||
      heroImg === "" ||
      heroImgMin === ""
    ) {
      if (title === "") {
        document.getElementById("title").style.borderBottom =
          "1px solid #e86961";
        document.querySelector(".main__title-required").style.display = "block";
      } else {
        document.getElementById("title").style.borderBottom =
          "1px solid #2e2e2e";
        document.querySelector(".main__title-required").style.display = "none";
      }
      if (subtitle === "") {
        document.getElementById("subtitle").style.borderBottom =
          "1px solid #e86961";
        document.querySelector(".main__subtitle-required").style.display =
          "block";
      } else {
        document.getElementById("subtitle").style.borderBottom =
          "1px solid #2e2e2e";
        document.querySelector(".main__subtitle-required").style.display =
          "none";
      }
      if (date === "") {
        document.getElementById("date").style.borderBottom =
          "1px solid #e86961";
        document.querySelector(".main__date-required").style.display = "block";
      } else {
        document.getElementById("date").style.borderBottom =
          "1px solid #2e2e2e";
        document.querySelector(".main__date-required").style.display = "none";
      }
      if (author === "") {
        document.getElementById("author").style.borderBottom =
          "1px solid #e86961";
        document.querySelector(".main__author-required").style.display =
          "block";
      } else {
        document.getElementById("author").style.borderBottom =
          "1px solid #2e2e2e";
        document.querySelector(".main__author-required").style.display = "none";
      }
      msgError.style.display = "block";
      msgSubmit.style.display = "none";
      return false;
    } else {
      msgSubmit.style.display = "block";
      msgError.style.display = "none";
      document.querySelector(".main__title-required").style.display = "none";
      document.querySelector(".main__subtitle-required").style.display = "none";
      document.querySelector(".main__author-required").style.display = "none";
      document.querySelector(".main__date-required").style.display = "none";
      return true;
    }
  }

  function getCheckRadioValue() {  //  Эта функция getCheckRadioValue() используется для получения значения выбранного радио-кнопки на веб-странице. 1. Сначала функция получает все элементы радио-кнопок на странице с помощью метода document.getElementsByName("publish"). Этот метод возвращает коллекцию элементов с указанным именем (в данном случае - "publish"). 2. Затем функция перебирает все полученные элементы радио-кнопок в цикле for, проверяя каждый элемент на наличие атрибута checked. 3. Если находится выбранная радио-кнопка (элемент с атрибутом checked), то функция возвращает значение этой радио-кнопки (elements[i].value).
    var elements = document.getElementsByName("publish");

    for (var i = 0, len = elements.length; i < len; i++)
      if (elements[i].checked) return elements[i].value;
  }

  const form = document.querySelector("#form");
  const publishButton = document.querySelector("#publishButton");

  publishButton.addEventListener("click", function () {  //  Этот код представляет собой обработчик события click для кнопки с id publishButton. Когда кнопка нажата, код собирает данные из формы с помощью объекта FormData, инициализирует пустой объект data для хранения собранных данных и устанавливает счетчик imageCount в 0. Затем код проверяет результат выполнения функции isValidateForm(), которая, вероятно, проверяет валидность данных в форме. Если данные в форме прошли валидацию, код продолжает выполнение. Далее происходит итерация по всем элементам FormData с помощью метода forEach. Для каждого элемента данных (представленного парой ключ-значение), код проверяет ключ на соответствие условиям в if (key === "avatar" key === "heroImage" key === "heroImageMin"). Если ключ соответствует одному из условий, код получает соответствующий элемент файлового ввода из формы, считывает информацию о файле с помощью объекта FileReader и добавляет содержимое файла в объект data. После этого увеличивается счетчик imageCount. Если imageCount достигает 3, то формируется объект JSON с данными и отправляется на сервер с помощью запроса fetch. Если ключ не соответствует условиям, значение сохраняется в объекте data без дополнительной обработки. Таким образом, данный код пытается загрузить изображения (avatar, heroImage, heroImageMin) с помощью FileReader, а затем отправить данные о форме на сервер с помощью fetch после успешной загрузки изображений.
    const formData = new FormData(form);
    const data = {};
    let imageCount = 0;
    let valid = isValidateForm();
    if (valid === true) {
      formData.forEach(function (value, key) {
        if (key === "avatar" || key === "heroImage" || key === "heroImageMin") {
          const imageInput = document.querySelector("#" + key);
          if (imageInput.files.length > 0) {
            const file = imageInput.files[0];
            const reader = new FileReader();
            reader.onload = function (event) {
              data[key] = event.target.result;
              imageCount++;
              if (imageCount === 3) {
                console.log(JSON.stringify(data));
                
              }
            };
            reader.readAsDataURL(file);
          }
        } else {
          data[key] = value;
        }
      });
    }
  });
});
