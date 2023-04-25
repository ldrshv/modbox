<?php

/**
 * Properties Lexicon Entries
 * Sorted by key, alphabetically
 *
 * @package minishop2
 * @subpackage lexicon
 */

$_lang['ms2_prop_class'] = 'Імʼя класу для вибірки. За замовчуванням, "msProduct".';
$_lang['ms2_prop_depth'] = 'Глибина пошуку товарів від кожного батьківського ресурсу.';
$_lang['ms2_prop_fastMode'] = 'Якщо увімкнено - в чанк результату будуть підставлені тільки значення з БД. Всі необроблені теги MODX, такі як фільтри, виклик сніпетів та інші - будуть вирізані.';
$_lang['ms2_prop_filetype'] = 'Тип файлів для вибірки. Можна використовувати "image" для зображень та розширення для інших типів файлів. Наприклад: "image,pdf,xls,doc".';
$_lang['ms2_prop_groups'] = 'Виводити опції тільки вказаних груп (назва чи ідентифікатор категорії, через кому, "0" означає без груп).';
$_lang['ms2_prop_hideEmpty'] = 'Не показувати опції з пустими значеннями.';
$_lang['ms2_prop_ignoreGroups'] = 'Групи, опції яких не потрібно виводити у списку, через кому.';
$_lang['ms2_prop_ignoreOptions'] = 'Опції, що не потрібно виводити в списку, через кому.';
$_lang['ms2_prop_includeContent'] = 'Вибирати поле "content" у товарів.';
$_lang['ms2_prop_includeTVs'] = 'Список TV параметрів для вибірки, через кому. Наприклад: "action,time" дадуть плейсхолдери [[+action]] та [[+time]].';
$_lang['ms2_prop_includeThumbs'] = 'Список розмірів мініатюр для вибірки, через кому. Наприклад: "small,medium" дадуть плейслолдери [[+small]] та [[+medium]]. Зображення мають бути зазделегідь згенеровані в галереї товару.';
$_lang['ms2_prop_limit'] = 'Ліміт вибірки результатів.';
$_lang['ms2_prop_link'] = 'ID звʼязку товарів, що присвоюється автоматично при створенні нового звʼязку в налаштуваннях.';
$_lang['ms2_prop_master'] = 'ID головного товару. Якщо вказані і "master" і "slave" - вибірка пройде по "master".';
$_lang['ms2_prop_offset'] = 'Пропуск результатів з початку виборки';
$_lang['ms2_prop_onlyOptions'] = 'Виводити тільки цей список опцій, вказаний через кому.';
$_lang['ms2_prop_optionFilters'] = 'Фільтри по опціям товарів. Передаються JSON строкою, наприклад, {"optionkey:>":10}';
$_lang['ms2_prop_optionName'] = 'Імʼя опції для виводу.';
$_lang['ms2_prop_optionSelected'] = 'Імʼя активної опції, щоб поставити атрибут "selected"';
$_lang['ms2_prop_options'] = 'Список опцій для виводу, через кому.';
$_lang['ms2_prop_outputSeparator'] = 'Необовʼязковий рядок для розділення результатів роботи.';
$_lang['ms2_prop_parents'] = 'Список категорій, через кому, для пошуку результатів. За замовчуванням вибірка обмежена поточним батьківським ресурсом. Якщо поставити 0 - вибірка не буде обмежена.';
$_lang['ms2_prop_product'] = 'Ідентифікатор товару. Якщо не вказаний, використовується ID поточного документа.';
$_lang['ms2_prop_resources'] = 'Список товарів, через кому, для виводу в результатах. Якщо ID товару починається з мінуса, цей товар виключається з вибірки.';
$_lang['ms2_prop_return'] = 'Спосіб виведення результатів';
$_lang['ms2_prop_returnIds'] = 'Повертати рядок з ID товарів, замість оформлених чанків.';
$_lang['ms2_prop_showDeleted'] = 'Показувати видалені товари.';
$_lang['ms2_prop_showHidden'] = 'Показувати товари, що сховані в меню.';
$_lang['ms2_prop_showLog'] = 'Показувати додаткову інформацію про роботу сніпета. Тільки для авторизованих у контексті "mgr".';
$_lang['ms2_prop_showUnpublished'] = 'Показувати неопубліковані товари';
$_lang['ms2_prop_showZeroPrice'] = 'Показувати товари з нульовою ціною.';
$_lang['ms2_prop_slave'] = 'ID дочірнього товару. Якщо вказаний "master" - ця опція ігнорується.';
$_lang['ms2_prop_sortGroups'] = 'Вказує порядок сортування груп опцій. Приймає як ID-шники, і текстові назви груп. Передаються рядком, наприклад: "22,23,24" або "Розміри,Електроніка,Різне".';
$_lang['ms2_prop_sortOptionValues'] = 'Вказує порядок сортування значень опцій. Передаються рядком, наприклад: "size:SORT_DESC:SORT_NUMERIC:100,color:SORT_ASC:SORT_STRING"';
$_lang['ms2_prop_sortOptions'] = 'Вказує порядок сортування опцій. Передаються рядком, наприклад: "size,color".';
$_lang['ms2_prop_sortby'] = 'Сортування вибірки. Для сортування по полям товару потрібно додати префікс "Data.", наприклад: "&sortby=`Data.price`"';
$_lang['ms2_prop_sortbyOptions'] = 'Вказує по яким опціям і як саме сортувати серед перелікованого в &sortby. Передається строкою, наприклад, "optionkey:integer,optionkey2:datetime"';
$_lang['ms2_prop_sortdir'] = 'Напрям сортування';
$_lang['ms2_prop_toPlaceholder'] = 'Якщо не пусто, сніпет збереже всі дані в плейсхолдер з цим імʼям, замість виводу на екран.';
$_lang['ms2_prop_toSeparatePlaceholders'] = 'Якщо ви вкажете слово в цьому параметрі, то ВСІ результати будуть виставлені в різні плейсхолдери, що починаються з цього слова і закінчуються порядковим номером рядка від нуля. Наприклад, вказав "myPl", ви отримаєте плейсхолдери [[+myPl0]], [[+myPl1]] і т.д.';
$_lang['ms2_prop_tpl'] = 'Чанк оформлення для кожного результату.';
$_lang['ms2_prop_tplDeliveriesOuter'] = 'Чанк для оформлення блока можливих способів доставки.';
$_lang['ms2_prop_tplDeliveriesRow'] = 'Чанк для оформлення одного способу доставки.';
$_lang['ms2_prop_tplEmpty'] = 'Чанк, що виводиться при відсутності результатів.';
$_lang['ms2_prop_tplOuter'] = 'Чанк обгортка для виводу результатів роботи сніпета.';
$_lang['ms2_prop_tplPaymentsOuter'] = 'Чанк для оформлення блоку можливих способів оплати.';
$_lang['ms2_prop_tplPaymentsRow'] = 'Чанк для оформлення одного способу оплати.';
$_lang['ms2_prop_tplRow'] = 'Чанк оформлення одного елемента вибірки.';
$_lang['ms2_prop_tplSingle'] = 'Чанк оформлення єдиного результату вибірки.';
$_lang['ms2_prop_tplSuccess'] = 'Чанк з повідомленням про успішну роботу сніпета.';
$_lang['ms2_prop_tplValue'] = 'Шаблон одного значення (тільки для множинних опцій)';
$_lang['ms2_prop_tvPrefix'] = 'Префікс для TV плейсхолдерів, наприклад "tv.". За замовчуванням параметр пустий.';
$_lang['ms2_prop_userFields'] = 'Асоціативний масив відповідності полів замовлення полям профілю користувача в форматі "поле замовлення" => "поле профілю".';
$_lang['ms2_prop_valuesSeparator'] = 'Роздільник для значень множинних опцій';
$_lang['ms2_prop_where'] = 'Рядок, закодований в JSON, з додатковими умовами вибірки.';
$_lang['ms2_prop_wrapIfEmpty'] = 'Включає вивід чанку-обгортки (tplWrapper) навіть якщо результатів немає.';
