DROP TABLE IF EXISTS books;

CREATE TABLE `books` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mini_descr` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `mini_descr_en` varchar(255) NOT NULL,
  `descr_en` text NOT NULL,
  `book_class` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

INSERT INTO books VALUES("14","Прикладная геоморфология","Настоящая книга — первое учебное пособие по курсу прикладной геоморфологии, который читается студентам-геоморфологам географических факультетов yниверситетов.","
INSERT INTO books VALUES("15","Геологический словарь. Том 2. (М-Я)","В словаре не рассматривается история возникновения и изменения содержания
INSERT INTO books VALUES("13","Механика мерзлых грунтов, Цытович Н.А.","В книге на основе анализа результатов многолетних главным образом отечественных исследований по механике мерзлых грунтов устанавливаются основные закономерности механики мерзлых грунтов как науки и их практические приложения по обоснованию методов устойчи","В книге на основе анализа результатов многолетних главным образом отечественных исследований по механике мерзлых грунтов устанавливаются основные закономерности механики мерзлых грунтов как науки и их практические приложения по обоснованию методов устойчивого строительства на вечномерзлых грунтах. Подробно рассматриваются методы определения параметров сформулированных закономерностей механики замерзающих, мерзлых и оттаивающих грунтов и использование их при проектировании и расчете оснований, фундаментов и земляных сооружений, возводимых на вечномерзлых грунтах. Ряд решений механики мерзлых грунтов табулирован, номографирован и снабжен числовыми примерами.","Permafrost engineering, Tsitovich N. A.","The book, based on the analysis of the mainly domestic research results on permafrost engineering established the basic laws of mechanics of frozen soil as a science and practical applications to validate the methods of sustainable construction on permafr","The book, based on the analysis of the mainly domestic research results on permafrost engineering established the basic laws of mechanics of frozen soil as a science and practical applications to validate the methods of sustainable construction on permafrost.  The methods for determining the parameters of the laws made by the mechanics of freezing, frozen and thawing soils and their use in the design and calculation bases, foundations and earthworks erected on permafrost are investigated in details. A number of solutions of  permafrost engineering problems are tabulated and numerical examples are provided.","3");
INSERT INTO books VALUES("25","книга","фывпв","ывпыварфвп","Book","dgsfh","dsgsthshdfsfhg","3");
INSERT INTO books VALUES("30","кеврс","впывапва","фварырва"," bgfhfg","sdfgsdf","shsfgjhsgf","2");
INSERT INTO books VALUES("31","zxcv","zxcv","zxcvxc","xcxv","zxcg","xcv","4");
INSERT INTO books VALUES("32","Красивая","Красивая","Красивая","Красивая","Красивая","Красивая","0");
INSERT INTO books VALUES("33","Красивая","Красивая","Красивая","Красивая","Красивая","Красивая","0");
INSERT INTO books VALUES("34","Красивая","Красивая","Красивая","Красивая","Красивая","Красивая","0");
INSERT INTO books VALUES("35","Красивая","Красивая","Красивая","Красивая","Красивая","Красивая","0");
INSERT INTO books VALUES("36","11","11","11","11","11","11","0");
INSERT INTO books VALUES("37","11","11","11","11","11","11","0");
INSERT INTO books VALUES("38","dff","df","df","df","df","df","0");
INSERT INTO books VALUES("39","dfds","sdfsdf","sdf","sdf","sdfsdfd","sdfs","0");



DROP TABLE IF EXISTS books_class;

CREATE TABLE `books_class` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO books_class VALUES("1","История Арктики","History of Arctic");
INSERT INTO books_class VALUES("2","Северный Морской Путь","The Northern Sea Route");
INSERT INTO books_class VALUES("3","Морской Лёд","Sea Ice");
INSERT INTO books_class VALUES("4","Справочная Литература","Supplemental Literature");



DROP TABLE IF EXISTS comps;

CREATE TABLE `comps` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `name_en` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO comps VALUES("1","МФТИ","MIPT");
INSERT INTO comps VALUES("2","ЮНИС","UNIS");
INSERT INTO comps VALUES("3","СПбГПУ","SPbSPU");
INSERT INTO comps VALUES("4","МГУ","MSU");
INSERT INTO comps VALUES("5","СПГМТУ","SMTU");
INSERT INTO comps VALUES("7","НТНУ","NTNU");



DROP TABLE IF EXISTS files;

CREATE TABLE `files` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `id_comp` int(2) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

INSERT INTO files VALUES("75","2","DSCN7240.JPG","03.06.2013");
INSERT INTO files VALUES("76","2","Adventfjord_ arealplan_plakat.pdf","03.06.2013");
INSERT INTO files VALUES("77","1","Medved.jpg","17.05.2014");
INSERT INTO files VALUES("78","1","Medved.docx","17.05.2014");
INSERT INTO files VALUES("79","1","link.png","28.08.2014");



DROP TABLE IF EXISTS link_class;

CREATE TABLE `link_class` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO link_class VALUES("1","Другое","Other");
INSERT INTO link_class VALUES("2","Университеты","Universities");
INSERT INTO link_class VALUES("3","Образовательные ресурсы","Educational resources");
INSERT INTO link_class VALUES("5","Научно-исследовательские институты","Scientific research institutes");
INSERT INTO link_class VALUES("4","Морская деятельность","Maritime activities");
INSERT INTO link_class VALUES("6","Международные программы и организации","International programs and organizations");
INSERT INTO link_class VALUES("7","Карты и данные  ","Maps and Data");
INSERT INTO link_class VALUES("8","Шпицберген","Spitsbergen");



DROP TABLE IF EXISTS link_subclass;

CREATE TABLE `link_subclass` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `class` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

INSERT INTO link_subclass VALUES("1","2","Ранжирование","Ranking");
INSERT INTO link_subclass VALUES("2","2","Норвегия","Norway");
INSERT INTO link_subclass VALUES("4","2","Россия","Russia");
INSERT INTO link_subclass VALUES("5","2","Другие страны","Other country");
INSERT INTO link_subclass VALUES("7","3","Образовательные порталы","Educational portal");
INSERT INTO link_subclass VALUES("9","3","Справочники и тематические словари","References and subject dictionaries");
INSERT INTO link_subclass VALUES("10","5","Норвегия","Norway");
INSERT INTO link_subclass VALUES("11","5","Россия","Russia");
INSERT INTO link_subclass VALUES("12","5","Другие страны","Other countries");
INSERT INTO link_subclass VALUES("13","6","Программы","Programs");
INSERT INTO link_subclass VALUES("14","6","Организации","Organizations");
INSERT INTO link_subclass VALUES("15","6","Проекты","Projects");
INSERT INTO link_subclass VALUES("16","7","Карты","Maps");
INSERT INTO link_subclass VALUES("17","7","Данные","Data");
INSERT INTO link_subclass VALUES("18","4","Северный морской путь","The Northern Sea Route");
INSERT INTO link_subclass VALUES("19","4","Судоходные компании","Shipping companies");
INSERT INTO link_subclass VALUES("20","4","Ледоколы","Icebreakers");
INSERT INTO link_subclass VALUES("21","8","Официальные учреждения","Official institutions");
INSERT INTO link_subclass VALUES("22","8","Научные организации и проекты","Scientific organizations and projects");
INSERT INTO link_subclass VALUES("23","8","Разная информация/Туризм","Some information / Tourism");
INSERT INTO link_subclass VALUES("24","3","Библиотеки on-line","On-line libraries");
INSERT INTO link_subclass VALUES("25","1","Официальные учреждения и компании","Official institutions and companies");
INSERT INTO link_subclass VALUES("26","1","Новости и публицистика","News and publicism");
INSERT INTO link_subclass VALUES("27","1","Коллекции ссылок","Link collections");
INSERT INTO link_subclass VALUES("28","1","Производители Научного Оборудования","Scientific Equipment Manufacturers");
INSERT INTO link_subclass VALUES("29","1","Новое название","New name");
INSERT INTO link_subclass VALUES("30","1","Новое название","New name");
INSERT INTO link_subclass VALUES("31","1","прарв","вапва");
INSERT INTO link_subclass VALUES("32","1","прарв","вапва");



DROP TABLE IF EXISTS links;

CREATE TABLE `links` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `descr_en` text NOT NULL,
  `cat_1` int(1) DEFAULT NULL,
  `cat_2` int(1) DEFAULT NULL,
  `cat_4` int(1) DEFAULT NULL,
  `cat_5` int(1) DEFAULT NULL,
  `cat_7` int(1) DEFAULT NULL,
  `cat_9` int(1) DEFAULT NULL,
  `cat_10` int(1) DEFAULT NULL,
  `cat_11` int(1) DEFAULT NULL,
  `cat_12` int(1) DEFAULT NULL,
  `cat_13` int(1) DEFAULT NULL,
  `cat_14` int(1) DEFAULT NULL,
  `cat_15` int(1) DEFAULT NULL,
  `cat_16` int(1) DEFAULT NULL,
  `cat_17` int(1) DEFAULT NULL,
  `cat_18` int(1) DEFAULT NULL,
  `cat_19` int(1) DEFAULT NULL,
  `cat_20` int(1) DEFAULT NULL,
  `cat_21` int(1) DEFAULT NULL,
  `cat_22` int(1) DEFAULT NULL,
  `cat_23` int(1) DEFAULT NULL,
  `cat_24` int(1) DEFAULT NULL,
  `cat_25` int(1) DEFAULT NULL,
  `cat_26` int(1) DEFAULT NULL,
  `cat_27` int(1) DEFAULT NULL,
  `cat_28` int(1) DEFAULT NULL,
  `cat_29` int(1) DEFAULT NULL,
  `cat_30` int(1) DEFAULT NULL,
  `cat_31` int(1) DEFAULT NULL,
  `cat_32` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;

INSERT INTO links VALUES("1","Магазин научной книги","http://urss.ru/cgi-bin/db.pl?lang=RU&blang=ru&page=Bookstore","Много книг по механике.
INSERT INTO links VALUES("2","Google Books","http://books.google.com","Библиотека от самой популярной поисковой системы.","Google Books","Huge library from the most popular search engine.","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("3","POAC","https://wiki.aalto.fi/display/POAC13/HOME","Традиционная конференция по Арктическим технологиям, проходит раз в 2 года.","POAC","Traditional conference on Arctic technologies (takes place every 2 years).","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("4","Совкомфлот","http://www.sovcomflot.ru/default.aspx?anim=1&ln=RU","Совкомфлот - крупнейшая российская судоходная компания, специализирующаяся на перевозке нефти, нефтепродуктов и сжиженного газа.","Sovcomflot","Sovcomflot - largest shipping company of Russia specializing in the transportation of petroleum, petroleum products and liquefied gas.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("5","Svalbard","http://www.svalbard.net//index.php?c=183&kat=Home","Туристическая информация про Норвегию.","Svalbard","Tourist information about Norway.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("6","INSROP","http://www.fni.no/insrop/","Международная программа Северный морской путь. Полностью присутствует на Google Books.","International Northern Sea Route Programme","International Northern Sea Route Programme. Fully present in the Google Books.","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("7","ARCUS","http://www.arcus.org/","Консорциум арктических исследований США (ARCUS), Фэрбенкс, Аляска, была образована в 1988 году.","ARCUS","The Arctic Research Consortium of the U.S. (ARCUS), based in Fairbanks, Alaska, was formed in 1988","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("8","IMO","http://www.imo.org/Pages/home.aspx","Международная морская организация. Есть сервис Knowledge Centre.","IMO","International maritime organization. Knowledge Centre is available.","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("9","Норвежский Полярный Институт","http://www.npolar.no/en/","Сайт Норвежского Полярного Института.","Norwegian Polar Institute","Website of the Norwegian Polar Institute.","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("10","Framsenteret","http://www.framsenteret.no/english.150370.no.html","В Северном исследовательском центре климата и окружающей среды работают около 500 ученых, участвующих в междисциплинарных исследований в области технологий, естественных и социальных наук.","Framsenteret","High North Research Centre for Climate and the Environment consists of about 500 scientists involved in interdisciplinary research in the fields of natural science, technology and social sciences.","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("11","Полярная Почта","http://www.polarpost.ru/forum/viewtopic.php?p=19928#p19928","История и география Арктики и Антарктики. В основном русскоязычная литература.
INSERT INTO links VALUES("12","The Internet Archive","http://archive.org/index.php","Много исторических уникальных книг.","The Internet Archive","Huge quantity of historical unique books.","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("13","Всё о Геологии","http://geo.web.ru/","Много литературы, ссылок по геологии.
INSERT INTO links VALUES("14","Морская Библиотека","http://sea-library.ru/index.php?start=63","Судовождение, навигация, лоция,
INSERT INTO links VALUES("15","disserCat — электронная библиотека диссертаций","http://www.dissercat.com","Платная научная электронная библиотека диссертаций и авторефера\'\"тов.","disserCat — Electronic Library of Theses","Paid digital scientific library of dissertations.","0","0","0","0","1","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO links VALUES("16","TopoSvalbard","http://toposvalbard.npolar.no/?lang=en","Электронная топографическая карта Шпицбергена на сайте полярного института. Есть возможность просмотра в режиме 3D.","TopoSvalbard","Electronic topographic map of Svalbard on the Polar Institute website. You can watch it in 3D.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("17","Arctic Maps","http://www.arctic.noaa.gov/maps.html","Карты Арктики.","Arctic Maps","Arctic Maps","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("18","GRID-Arendal Maps & Graphics Library","http://www.grida.no/graphicslib","Проект по сбору и каталогизированию полиграфической продукции и веб-сайтов широкого круга тем, касающихся окружающей среды и устойчивого развития технологий.","GRID-Arendal Maps & Graphics Library","An on-going project to collect and catalogue all graphic products that have been prepared for publications and web-sites from the last 15 years in a wide range of themes related to environment and sustainable development.","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("19","Северное морское пароходство (ОАО СМП)","http://ansc.ru/Rus/Company/InfR.shtml","Одна из крупнейших компаний на Северо-западе России. Перевозки по всему миру, в том числе по маршруту Северного морского пути. Архангельск.","Northern Shipping","One of the largest companies in the North-West of Russia. Goods transportation around the world, including the Northern Sea Route. Arkhangelsk.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("20","Ледоколы России","http://dic.academic.ru/dic.nsf/ruwiki/357695","Ледоколы России и другие суда севера.","Russian icebreakers","Russian icebreakers and other vessels of north.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("21","Трест «Арктикуголь»","http://www.arcticugol.ru/","Журнал «Русский Вестник Шпицбергена» -история, природа, новости.
INSERT INTO links VALUES("22","Веб-камера на Лонгиербиене","http://longyearbyen.livecam360.com/flash/main.php ","Веб-камера в Лонгиербиене. Также есть панорамы <a href=\"http://portlongyear.livecam360.com/flash/main.php\">Порт Лонгиербиене</a>, <a href=\"http://svalsat.livecam360.net/\">Свалcате</a> и <a href=\"http://sveaspitzbergen.livecam360.com/flash/main.php\">Шпицбергене</a>.","Webcam at Longyearbyen","Webcam in Longyearbyen. Аlso the panoramas <a href=\"http://portlongyear.livecam360.com/flash/main.php\"> Port of Longyear </ a>, <a href=\"http://svalsat.livecam360.net/\"> Svalsat </ a> and <a href=\"http://sveaspitzbergen.livecam360.com/flash/main.php\"> Svalbard </ a>.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","","","","");
INSERT INTO links VALUES("23","Barents Sea Atlas","http://www.nodc.noaa.gov/OC5/barsea/barindex1.html","Оцифрованные карты. Температура и соленость по глубинам и по месяцам. Арктическая навигация. Климатический Атлас Баренцево моря.
INSERT INTO links VALUES("24","National Snow & Ice Data Center","http://nsidc.org/ ","Центр данных снега и льда в Колорадо. Ежедневные ледовые карты.","National Snow & Ice Data Center","National Snow & Ice Data Center in Colorado. Daily ice charts.","0","0","0","0","1","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("25","The Arctic: The Frozen Sea","http://www.divediscover.whoi.edu/arctic/index.html","Хорошая карта течений и про сроки разведки Арктики.","The Arctic: The Frozen Sea","Good maps of currents and The Arctic: Exploration timeline.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("26","Martech Polar","http://www.martechpolar.com/index.html","Информация о ледоколах со всего мира.","Martech Polar","Information about icebreakers from all around the world.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("27","Sustainable Arctic Marine and Coastal Technology (SAMCoT)","http://www.ntnu.edu/samcot","Центр исследований основанных на инновациях в Норвегии.","Sustainable Arctic Marine and Coastal Technology (SAMCoT)","A Centre for Innovation-based Research  in Norway.","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("28","The Arctic","http://www.arctic.ru/","Арктические новости.","The Arctic","News about The Arctic.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","","","","");
INSERT INTO links VALUES("29","РИА Новости","http://ria.ru/arctic/","Новости про Арктику на русском.","RIA Novosti","News of the Russian Arctic.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","","","","");
INSERT INTO links VALUES("30","Библиотека МГУ","http://www.msu.ru/libraries/","Интересные разделы - геология и махмат.","MSU library","Interesting sections - Geology and Mechanics-Maths.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","","","","");
INSERT INTO links VALUES("31","Библиотекарь.Ру","http://bibliotekar.ru/index.htm","Художественная и гуманитарная литература...","Librarian.Ru","Arts and humanities literature...","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","","","","");
INSERT INTO links VALUES("32","Elibrary","http://elibrary.ru/authors.asp","Для доступа требуется регистрация в России.","Elibrary","Registration is required for access from Russia.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","","","","");
INSERT INTO links VALUES("33","Библиотека Альдебаран","http://lib.aldebaran.ru/referats/","Рефераты на гуманитарные направления.","Библиотека Альдебаран","Essays on the humanitarian fields.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","","","","");
INSERT INTO links VALUES("61","CHNL","http://chnl.no/","Цель CHNL -создание консорциума, который связывает воедино все сегменты морской отрасли в Норвегии.","CHNL","CHNL is aimed to build a consortium that links together all segments of the maritime industry in Norway. ","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("35","Норвежский космический центр ","http://www.spacecentre.no/english/","Норвежский космический центр является национальным космическим агентством Норвегии, организована как государственное учреждение при Министерстве торговли и промышленности","Norwegian Space Centre ","The Norwegian Space Centre is the national space agency in Norway, organized as a government agency under the Ministry of Trade and Industry","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("60","IAPSO","http://iapso.iugg.org/","IAPSO способствует изучению физических наук об океане путем организации международных форумов и публикации письменных материалов об океане для ученых.","IAPSO","IAPSO promotes the study of the physical sciences of the oceans by organising international forums and publishing written materials for ocean scientists throughout the world.","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("37","Лаборатория исследования климата Арктики","http://www.fram.nw.ru","Совместная лаборатория  AARI/NPI FRAM (FAL) - основана Росгидрометом и Норвежским полярным институтом","Arctic climate research Laboratory","Joint AARI/NPI FRAM Arctic climate research Laboratory (FAL),founded jointly by the Arctic and Antarctic research institute of Roshydromet and the Norwegian Polar Institute","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("59","Арктический совет","http://www.arctic-council.org/index.php/en/","Арктический совет: межправительственный форум для поощрения сотрудничества, координации и взаимодействия между арктическими государствами.","The Arctic Council","The Arctic Council: high-level intergovernmental forum
INSERT INTO links VALUES("39","Институт Арктических и Антарктических исследований","http://www.aari.nw.ru/default_en.asp","Институт Арктических и Антарктических исследований принадлежит федеральной службе гидрометеорологии и мониторинга окружающей среды РФ (Росгидромет). Институт расположен в Санкт Петербурге","Arctic and Antartcic Research Institute ","Arctic and Antartcic Research Institute belongs to Federal Service for Hydrometeorology
INSERT INTO links VALUES("40","Норвежский метеорологический институт","http://met.no/English/","Норвежский метеорологический институт обслуживает как военные, так и гражданские службы в Норвегии.
INSERT INTO links VALUES("41","Институт судостроения им. Крылова","http://www.ksri.ru/eng1/main.htm","Институт судостроения им. Крылова базируется в Санкт-Петербурге
INSERT INTO links VALUES("42","Институт Океанологии РАН им. Ширшова","http://www.ocean.ru/eng/component/option,com_frontpage/Itemid,1/","Институт Океанологии РАН им. Ширшова. Базируется в Москве.
INSERT INTO links VALUES("43","ЦНИИМФ","http://www.cniimf.ru/news.htm","ЦНИИМФ, созданный в 1929 году, является головной научной организацией Российской Федерации в области морского транспорта.
INSERT INTO links VALUES("44","Газпром ВНИИГАЗ","http://www.vniigaz.gazprom.ru/en/index.php","Газпром ВНИИГАЗ был создан в 1948 году. Основатель ООО Газпром ВНИИГАЗ является ОАО Газпром, (100% доля уставного капитала Общества).","GAZPROM VNIIGAZ","GAZPROM VNIIGAZ was established in 1948. The founder of GAZPROM VNIIGAZ Ltd. is JSC Gazprom, which has 100% share of the charter capital of the Company.
INSERT INTO links VALUES("45","Институт Альфреда Вегенера","http://www.awi.de/","Институт Альфреда Вегeнера проводит исследования в Арктике и Антарктике также как и в высоких и средних широтах океанов. ","Alfred Wegener Institute","The Alfred Wegener Institute carries out research in the Arctic and Antarctic as well as in the high and mid latitude oceans. ","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("57","Норвежская правительственная организация","http://www.forskningsradet.no","Норвежская правительственная организация, финансирующая научные проекты.","Norwegian governmental organization","Norwegian governmental organization that funds research projects.","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("58","SIU","http://www.siu.no/eng","Норвежский центр международного сотрудничества в области образования - норвежское общественное агентство по развитию международного сотрудничества в области образования и научных исследований.","SIU","Norwegian Centre for International Cooperation in Education (SIU) is a public Norwegian agency promoting international cooperation in education and research.","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("46","Центр исследования климата Аляски","http://climate.gi.alaska.edu/","Центр исследования климата Аляски является исследовательской и обслуживающей организацией в Геофизическом институте Университета Фэрбенкс.","The Alaska Climate Research Center","The Alaska Climate Research Center is a research and service organization at the Geophysical Institute, University of Alaska Fairbanks.","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("47","Отдел полярных программ","http://www.nsf.gov/dir/index.jsp?org=OPP","Национальный научный фонд инициирует и управляет Отделом полярных программ (финансирование фундаментальных исследований в Арктике и Антарктике). ","Division of Polar Programs (POLAR)","The Division of Polar Programs (POLAR) manages and initiates National Science Foundation funding for basic research and its operational support in the Arctic and the Antarctic.","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("56","Всемирная метеорологическая организация (ВМО)","http://www.wmo.int/pages/index_en.html","Всемирная метеорологическая организация (ВМО) - специализированное агентство Организации Объединенных Наций,действия которого посвящены метеорологии (погода и климат), оперативной гидрологии (вода) и т.д.","World Meteorological Organization (WMO)","The World Meteorological Organization (WMO) is a specialized agency of the United Nations dedicated to meteorology (weather and climate), operational hydrology (water) and other geophysical sciences.","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","1","0","0","0","0","","","","");
INSERT INTO links VALUES("48","Университет - Национальная океанографическая лабораторная система (UNOLS)","http://www.unols.org/","Университет - Национальная океанографическая лабораторная система (UNOLS)является одним из 62 научных учреждений и национальных лабораторий, участвующих в океанографических исследованиях. ","University-National Oceanographic Laboratory System (UNOLS)","University-National Oceanographic Laboratory System (UNOLS) is an organization of 62 academic institutions and National Laboratories involved in oceanographic research.","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("49","Арктический институт Северной Америки","http://www.arctic.ucalgary.ca/","Созданный по решению парламента в 1945 году, Арктический институт Северной Америки является некоммерческой организацией и многопрофильным научно-исследовательским институтом Университета Калгари.","Arctic Institute of North America","Created by an Act of Parliament in 1945, the Arctic Institute of North America is a non-profit membership organization and a multi-disciplinary research institute of the University of Calgary.","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("50","Исследовательская и инженерная лаборатория холодных регионов (CRREL)","http://www.crrel.usace.army.mil/","Исследовательская и инженерная лаборатория холодных регионов (CRREL)","Cold Regions Research and Engineering Laboratory (CRREL)","Cold Regions Research and Engineering Laboratory (CRREL)
INSERT INTO links VALUES("51","Датский полярный центр","http://www.eastgreenland.com/database.asp?lang=eng&num=434","Датский полярный центр является информационным и сервисным центром для ученых и учреждений, занимающихся полярными исследованиями и арктическими вопросами.","DPC","DPC (Danish Polar Center) is a knowledge and service center for scientists and institutions dealing with polar research and arctic matters, for Danish authorities, and for the Danish public in general.","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("52","Международный арктический исследовательский центр, Университет Аляски","http://www.iarc.uaf.edu/","Международный арктический исследовательский центр, Университет Аляски","International Arctic Research Center (IARC); University of Alaska Fairbanks","International Arctic Research Center (IARC); University of Alaska Fairbanks
INSERT INTO links VALUES("53","INSTAAR","http://instaar.colorado.edu/","INSTAAR развивает научные знания физических и биохимических процессов в окружающей среде, применяет эти знания для повышения информированности общества и понимания природных и антропогенных изменений окружающей среды.","INSTAAR","INSTAAR develops scientific knowledge of physical and biogeochemical environmental processes, and applies this knowledge to improve societys awareness and understanding of natural and anthropogenic environmental change.","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("54","Океанографический институт Вудса Холе","http://www.whoi.edu/","Океанографический институт Вудса Холе (штат Массачусетс, США) является крупнейшим в мире частным, некоммерческим институтом океанографических исследований и мировым лидером в области исследования и освоения океана.","Woods Hole Oceanographic Institution","Woods Hole Oceanographic Institution (Massachusetts, USA) is the worlds largest private, non-profit oceanographic research institution and a global leader in the study and exploration of the ocean.","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("55","Полярный научно-исследовательский институт Скотта","http://www.spri.cam.ac.uk/","Полярный научно-исследовательский институт Скотта известный центр исследований в обоих полярных регионах. Он является частью Кембриджского университета (кафедра географии).","Scott Polar Research Institute ","The Scott Polar Research Institute is a well-known and long-established centre for research into both polar regions. It is part of the University of Cambridge and is a sub-department of the Department of Geography.","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("62","AMAP","http://www.amap.no/","AMAP является международной организацией, созданной в 1991 г. для осуществления защиты окружающей среды Арктики.","AMAP","AMAP is an international organization established in 1991 to implement components of the Arctic Environmental Protection Strategy (AEPS).","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("63","WCRP","http://www.wcrp-climate.org/","Основными целями WCRP являются определение предсказуемости климата и оценка влияния деятельности человека на климат.","WCRP","The main objectives of WCRP are to determine the predictability of climate and to determine the effect of human activities on climate.","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("64","Всемирный фонд дикой природы","http://wwf.panda.org/what_we_do/where_we_work/arctic/","Всемирный фонд дикой природы (WWF) - международная организация, работающей по вопросам, касающимся сохранения, исследования и восстановления окружающей среды.","WWF","The World Wide Fund for Nature (WWF) is an international non-governmental organization working on issues regarding the conservation, research and restoration of the environment.","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("65","Международный арктический научный комитет","http://www.iasc.info/","Международный арктический научный комитет - неправительственная организация, которая призвана стимулировать, поощрять и развивать сотрудничество по всем аспектам арктических исследований.","IASC","The International Arctic Science Committee, is a non-governmental organisation that aims to encourage, facilitate and promote cooperation in all aspects of Arctic research.","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("66","IASOA","http://iasoa.org/iasoa/index.php?option=com_frontpage&Itemid=1","Миссия IASOA - координация исследований Арктики, облегчение доступа к данным и удобство использования.","IASOA","The mission of IASOA is coordinating research of Arctic, facilitating data access and usability.","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("67","Международный полярный фонд","http://www.polarfoundation.org/","Основанный в 2002 году брюссельский Международный полярный фонд предлагает новый интерфейс связи между наукой и обществом.","International Polar Foundation","Founded in 2002, the Brussels-based International Polar Foundation provides a novel interface between science and society.","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("68","Комиссия по исследованию Арктики США ","http://www.arctic.gov/","Комиссия по исследованию Арктики США (USARC) является независимым федеральным агентством, которое предоставляет президенту и Конгрессу советы  и рекомендации по исследованию Арктики.","United States Arctic Research Commission (USARC)","The United States Arctic Research Commission (USARC) is an independent federal agency that provides the President and Congress with reports, recommendations, and advice on Arctic research","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("69","Европейская сеть","http://envinet.npolar.no/","Европейская сеть. Цель - Арктика-альпийские экологические исследования.","European Network for Arctic-Alpine Environmental Research","European Network for Arctic-Alpine Environmental Research.","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("70","Европейский центр по исследованию окружающей среды Арктики (ARCFAC)","http://arcfac.npolar.no/","Европейский центр по исследованию окружающей среды Арктики (ARCFAC)","European Centre for Arctic Environmental Research (ARCFAC)","European Centre for Arctic Environmental Research (ARCFAC)","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("71","Совет Полярных исследований","http://dels.nas.edu/prb","Совет Полярных Исследований осуществляет обеспечение независимого научного руководства научных групп по вопросам Арктики, Антарктики и холодных регионов в целом.","The Polar Research Board (PRB)","First established in 1958, the Polar Research Board exists to provide independent scientific guidance to federal agencies and the nation on science issues in the Arctic, the Antarctic, and cold regions in general.","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("72","Полярный центр науки","http://psc.apl.washington.edu/wordpress/","Полярный центр науки - это группа преданных ученых, проводящих исследования в области океанографии, климатологии, метеорологии, биологии и экологии регионов, покрытыми льдом.","Polar Science Center","The Polar Science Center is a group of dedicated investigators conducting interdisciplinary research on the oceanography, climatology, meteorology, biology and ecology of the ice-covered regions.","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("73","UArktic Atlas","http://www.uarctic.org/AtlasFront.aspx?M=637","UArktic Atlas - учебный ресурс как для студентов Университета Арктики, так и для всех заинтересованных.","UArctic Atlas","The UArctic Atlas, a learning resource both for UArctic students and anyone else interested in the northern circumpolar region.","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("74","Bellwether Publishing","http://www.bellpub.com/pgg/","Полярная География, ежеквартальное издание.","Bellwether Publishing","Polar Geography, a quarterly publication.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","","","","");
INSERT INTO links VALUES("75","Ледовые термины","http://www.aari.nw.ru/gdsidb/glossary/r1.htm","Ледовые термины, расположенные в тематическом порядке на сайте ААНИИ.
INSERT INTO links VALUES("76","Официальный сайт губернатора Свальбарда","http://www.sysselmannen.no/en/","Официальный сайт губернатора Свальбарда","Official site of the Governor of Svalbard","Official site of the Governor of Svalbard","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("77","Сайт местной администрации","http://www.lokalstyre.no/#","Сайт местной администрации (муниципалитет). На норвежском, но можно включить переводчик Google.
INSERT INTO links VALUES("78","Store Norsk","http://www.snsk.no/hjem.145162.en.html","Store Norske является самым северным угледобывающей (в основном уголь) компанией в мире.","Store Norske ","Store Norske is the northernmost mining (mostly coal) company in the world.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("79","Местная газета города Лонгиербиен","http://svalbardposten.no/","Местная газета города Лонгиербиен, выходит раз в неделю и сразу же оказывается во всех правительственных организациях Норвегии из-за особого статуса Свальбарда.","The local newspaper of Longyearbyen","Local newspaper of Longyearbyen, is being published once a week.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("80","Научный форум Шпицбергена(SSF)","http://www.forskningsradet.no/prognett-ssf/Home_page/1253969737234","Научный форум Шпицбергена(SSF)","Svalbard Science Forum (SSF) ","Svalbard Science Forum (SSF)
INSERT INTO links VALUES("81","Норвежская государственная корпорация ","http://www.kingsbay.no/","Норвежская государственная корпорация Kings Bay AS владеет и управляет самым северным поселением под названием Ню-Олесунн, предоставляет услуги и содействовует проведению научных исследований и научной деятельности.","Norwegian public corporation","Norwegian public corporation Kings Bay AS owns and runs the worlds northernmost settlement named Ny-Ålesund, provide services and promote research and scientific activities.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("82","NySMAC","http://nysmac.npolar.no/","Комитет научных руководителей Ню-Олесунна(NySMAC) была создана в 1994 году для укрепления сотрудничества и координации между научно-исследовательской деятельности в Ню-Олесунн.","NySMAC","The Ny-Ålesund Science Managers Committee (NySMAC) was established in 1994 to enhance cooperation and coordination amongst research activities at the Ny-Ålesund International Arctic Research and Monitoring Facility.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("83","Флора Шпицбергенa","http://svalbardflora.net/index.php?id=1","Флора Шпицбергенa: цель данного веб-сайта - представление полного перечня видов растений (с фото) на архипелаге Шпицберген.","The Flora of Svalbard","The Flora of Svalbard: the goal of this web site is to present a complete flora with excellent photo documentation of the plant species in the Archipelago of Svalbard.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("84","Птицы","http://www.svalbardbirds.com/","Птицы Шпицберген и Ян-Майен.","Birds of Svalbard and Jan Mayen","Birds of Svalbard and Jan Mayen. ","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("85","Svalbard Insects","http://svalbardinsects.net/","Наземная и пресноводная фауна беспозвоночных Шпицбергена.","Svalbard Insects","Terrestrial and freshwater invertebrate fauna of Svalbard.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("86","The Svalbard Pages","http://www.svalbard.com/","Сайт про Шпицберген","The Svalbard Pages","The Svalbard Pages","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","","","","");
INSERT INTO links VALUES("87","Svalbard images","http://www.svalbard-images.com/","На этом сайте вы можете найти новости, карты, фотографии и веб-камеры Шпицбергена в Арктике Норвегии. Чтобы просмотреть фотографии, необходимо нажать на карту.","Svalbard images","Welcome on this site of news, maps, pictures and webcams of Spitsbergen and Svalbard in Arctic Norway. In the selected areas, you can point on the maps to view the pictures.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","","","","");
INSERT INTO links VALUES("88","University College London (UCL)","http://www.ucl.ac.uk/","University College London (UCL)","University College London (UCL)","University College London (UCL)
INSERT INTO links VALUES("89","Университет Нью-Гемпшир","http://www.eos.sr.unh.edu/","Университет Нью-Гемпшир - институт по изучению Земли, океанов и космического пространства.","University of New Hampshire - institue for the Study of Earth, Oceans, and Space.","University of New Hampshire - institute for the Study of Earth, Oceans, and Space.","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("90","University of Greenland","http://www.ilisimatusarfik.gl/OmIlisimatusarfik/forsiden2010/tabid/304/language/en-US/Default.aspx","Университет Гренландии","University of Greenland","University of Greenland","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("91","The University Centre in Svalbard (UNIS)","http://www.unis.no/","Учебно-научный центр в Шпицбергене (UNIS)","The University Centre in Svalbard (UNIS)","The University Centre in Svalbard (UNIS)","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("92","Universityof Oslo","http://www.uio.no/english/","Университет Осло","University of Oslo","University of Oslo","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("93","Universityof Bergen","http://www.uib.no/en","Университет Бергена","Universityof Bergen","Universityof Bergen","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("94","University of Tromsø","http://en.uit.no/inenglish","Университет Тромсе","University of Tromsø","University of Tromsø","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("95","Norwegian University of Science and Technology","http://www.ntnu.edu/","Норвежский университет науки и технологии","Norwegian University of Science and Technology","Norwegian University of Science and Technology
INSERT INTO links VALUES("96","University of Stavanger","http://www.uis.no/frontpage/","Университет Ставангера","University of Stavanger","University of Stavanger","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("97","Norwegian University of Life Sciences","http://www.umb.no/english","Норвежский университет наук (о жизни)","Norwegian University of Life Sciences","Norwegian University of Life Sciences","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("98","Universityof Nordland","http://www.uin.no/english/Pages/default.aspx","Университет Нордланда","Universityof Nordland","Universityof Nordland","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("99","University of Agder","http://www.uia.no/en","Университет Агдера","University of Agder","University of Agder","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("100","Times Higher Education World Reputation Rankings","http://www.timeshighereducation.co.uk/world-university-rankings/2012-13/world-ranking","2013 Times Higher Education World Reputation Rankings. Последняя версия была выпущена в 21.00 (по Гринвичу) в понедельник, 4 марта 2013 года.","Times Higher Education World Reputation Rankings","The 2013 Times Higher Education World Reputation Rankings. Last version has been released at 21.00 (GMT) on Monday 4th March 2013.","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("101","QS World University Rankings","http://www.topuniversities.com/university-rankings/world-university-rankings","QS World University Rankings. Вы можете найти рейтинги лучших университетов в конкретном регионе, по предметной области.","QS World University Rankings","QS World University Rankings – the most widely read university comparison of their kind. Аlso you can use the rankings to find the best universities in a specific region, by subject area.","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("102","Webometrics Ranking of World Universities","http://www.webometrics.info/","\"Webometrics Ranking of World Universities\" - инициативный проект Cybermetrics Lab, исследовательской группы, принадлежащей Consejo Superior de InvestigacionesCientíficas (CSIC).","Webometrics Ranking of World Universities","The \"Webometrics Ranking of World Universities\" is an initiative of the Cybermetrics Lab, a research group belonging to the Consejo Superior de InvestigacionesCientíficas (CSIC).","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("103","The Academic Ranking of World Universities (ARWU)","http://www.arwu.org/index.jsp","Академический рейтинг университетов мира (ARWU) был впервые опубликован в июне 2003 года Центром университетов мирового класса и Институтом высшего образования Шанхайского университета Цзяо Тун, Китай.","The Academic Ranking of World Universities (ARWU)","The Academic Ranking of World Universities (ARWU) is first published in June 2003 by the Center for World-Class Universities and the Institute of Higher Education of Shanghai Jiao Tong University, China.","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("104","МГУ","http://www.msu.ru/en/","Московский Государственный Университет","Moscow State University","Moscow State University","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("105","Санкт-Петербургский государственный политехнический институт","http://www.spbstu-eng.ru/","Санкт-Петербургский государственный политехнический институт (НИУ)","Saint Petersburg State Polytechnical Institute","Saint Petersburg State Polytechnical Institute","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("106","Санкт-Петербургский Государственный Морской Технический Университет","http://www.smtu.ru/","Санкт-Петербургский Государственный Морской Технический Университет","State Marine Technical University of St. Petersburg (SMTU)","State Marine Technical University of St. Petersburg (SMTU)","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("107","Московская Государственная Академия Водного Транспорта","http://www.msawt.ru/","Московская Государственная Академия Водного Транспорта","Moscow State Academy of Water Transport","Moscow State Academy of Water Transport","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("108","Мурманский Государственный Технический Университет","http://eng.mstu.edu.ru/","Мурманский Государственный Технический Университет","Murmansk State Technical University","Murmansk State Technical University","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("109","Северный (Арктический) федеральный университет им. М. В. Ломоносова","http://narfu.ru/en/","Северный (Арктический) федеральный университет им. М. В. Ломоносова","Northern (Arctic) Federal University named after M. V. Lomonosov","Northern (Arctic) Federal University named after M. V. Lomonosov","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("110","МФТИ","http://phystech.edu/","Московский Физико-Технический Институт (ГУ)","MIPT","Moscow Istitute of Physics and Technology (state university)","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("111","University of the Arctic","http://www.uarctic.org/Frontpage.aspx?m=3","Университет Арктики — это международный проект, объединяющий в единую сеть университеты, колледжи, научно-исследовательские институты и другие организации (всего 136 учреждений).
INSERT INTO links VALUES("112","Norwegian Polar Institute WEB-GIS for Svalbard","http://svalbardkartet.npolar.no/Viewer.html?Viewer=Svalbardkartet","Норвежский полярный институт. Направления: окружающая среда, ледники, геология.
INSERT INTO links VALUES("113","ГИС Атлас Баренцево-Карского морей","http://gis.transparentworld.ru/en/barents/","ГИС Атлас Баренцево-Карского морей: экологически опасные объекты, трубопроводы, железные дороги, маршруты транспортировок нефти, нефтегазовые месторождения.","GIS atlas Barents- Kara Seas","GIS atlas Barents- Kara Seas.
INSERT INTO links VALUES("114","Интерактивный атлас мира","http://wikimapia.org/#lang=en&lat=60.391100&lon=5.324700&z=10&m=b","Интерактивный атлас мира (много языков). Фотографии, информация о географических объектах.","Interactive Atlas of the world","Interactive Atlas of the world (many languages). Photos, information about geographical objects. 
INSERT INTO links VALUES("115","Norwegian Meteorological Institute","http://met.no/English/Ocean_and_Ice/","Океанографическая информация и данные северных морей и Северного Ледовитого океана от Норвежского метеорологического института.
INSERT INTO links VALUES("116","Sea Ice Index","http://nsidc.org/data/seaice_index/index.html","Информация об арктических льдах от Национального центра обработки данных льда и снега США (обновляется ежедневно).","Sea Ice Index","The daily Sea Ice Index by US National Snow and Ice Data Center,provides a quick look at Arctic-wide changes in sea ice.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("117","Есимо","http://www.esimo.net/","Обзорные карты состояния ледяного покрова северного ледовитого океана на сайте Есимо (Единая государственная система информации об обстановке в мировом океане).","Есимо","Overview maps of Arctic Ocean ice cover on the site of USSWO (Unified state system of information on the worlds oceans).","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("118","Чарт Пилот","http://www.chartpilot.ru/","ООО «Чарт Пилот»: готовит и продает морские навигационные карты,  электронные навигационные карты и лоции.","Чарт Пилот","Ltd. \"Chart Pilot\": prepares and sells nautical charts, electronic navigational charts and sailing direction charts.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("119","ARMAP","http://armap.org/","Картографическое приложение арктических исследований (ARMAP) представляет собой онлайн сервис интерактивных карт и услуг, обеспечивающих поддержку арктической науки.","ARMAP","Arctic Research Mapping Application (ARMAP) is a suite of online, interactive maps and services that support Arctic science.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("120","Экологический атлас Арктики","http://maps.grida.no/arctic/","Экологический атлас Арктики","Arctic environmental atlas","Arctic environmental atlas","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("121","WWF","http://wwf.panda.org/what_we_do/where_we_work/arctic/publications/arctic_atlas/","Всемирный фонд дикой природы (WWF) - международная организация, работающей по вопросам, касающимся сохранения, исследования и восстановления окружающей среды.","WWF","The World Wide Fund for Nature (WWF) is an international non-governmental organization working on issues regarding the conservation, research and restoration of the environment.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("122","NPD","http://www.npd.no/en/","Раздел карт на сайте NPD. Там можно найти все поля и области, которые были открыты для геологоразведочных работ по состоянию на 20 июня 2012 года.","NPD","Map-section of NPD.It shows all fields, discoveries, areas awarded and areas that have been opened for exploration activities as of June 20th, 2012.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("123","GIS-LAB","http://gis-lab.info/qa/meteo-station-sources.html","Интересная статья «Источники метеорологических данных на территорию РФ по станциям» со ссылками.","GIS-LAB","Interesting article \"Sources of meteorological data on the territory of the Russian Federation from the meteorological stations\" with references.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("124","Arctic Report Card 2012","http://www.arctic.noaa.gov/reportcard/","Подготовка Arctic Report Card 2012 осуществлялась представителями NOAA, Лабораторией исследований холодных областей и Управлением военно-морских исследований.","Arctic Report Card 2012","The preparation of Arctic Report Card 2012 was directed by representatives from NOAA, the Cold Regions Research and Engineering Laboratory and the Office of Naval Research.","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO links VALUES("125","Информация о портах России","http://www.morinfocenter.ru/rusports/","Информация о портах России. Власти, схема, описание, портовые сборы, компании, документы, грузооборот за последние годы.
INSERT INTO links VALUES("126","korabel","http://www.korabel.ru/","Информационно - поисковая система. Судоходство, судостроение, судоремонт.","korabel","Information - search engine. Shipping, shipbuilding, ship repair.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("127","Морские вести России","http://www.morvesti.ru/","Сайт газеты «Морские вести России». Свежие новости. Можно заказать журналы и книги. Есть редакционно- издательский центр.
INSERT INTO links VALUES("128","АСМП","http://www.nsra.ru/","Основными целями АСМП являются обеспечение безопасности мореплавания и защиты морской среды от загрязнения с судов в акватории Северного морского пути.","АСМП","The main objectives of NSRA are to ensure the safety of navigation and protection of the marine environment from pollution by ships in the waters of the Northern Sea Route.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("129","US coast guard icebreakers science operations","http://icefloe.net/","Береговая охрана США: ледоколы, научные исследования и миссии.","US coast guard icebreakers science operations","US coast guard: icebreakers science operations","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("130","Береговая охрана США","http://www.uscg.mil/","Миссии береговой охраны США: навигация, поиск и спасение, обеспечение безопасности на море, охрана морской среды, ледовые операций.","US Coast Guard","Тhe US Coast Guard missions are: aids to navigation, search and rescue, marine safety, marine environmental protection, ice operations.
INSERT INTO links VALUES("131","Росморечфлота","http://www.morflot.ru/","Федеральное агентство морского и речного транспорта России.","Federal Agency of Maritime and River Transport of Russia.","Federal Agency of Maritime and River Transport of Russia.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","","","","");
INSERT INTO links VALUES("132","Geokon, Inc.","http://www.geokon.com/","Компания Геокон является производителем датчиков и приборов, используемых в гражданских, горнодобывающих и структурных инженерных проектах во всем мире.","Geokon, Inc.","Geokon, Inc., The World Leader in Vibrating Wire Technology™, located in Lebanon, NH, is a manufacturer of sensors and instrumentation used in civil, mining and structural engineering projects throughout the world.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","","","","");
INSERT INTO links VALUES("133","AARC","http://www.akerarctic.fi/","Персонал AARC имеет многолетний опыт работы во всех аспектах судостроения, машиностроения и строительного проектирования, арктических технологий, а также в R&D, тестировании и соответствующей научной работы.","AARC","The personnel of AARC has decades of experience in all aspects of shipbuilding, mechanical engineering and structural design, Arctic technology, as well as in R&D, testing and scientific related work.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","","","","");
INSERT INTO links VALUES("134","NI","http://www.ni.com/","Графический подход NI к проектированию систем обеспечивает интегрированную программно-аппаратную платформу, что упрощает разработку любой системы.","NI","Graphical system design approach of NI provides an integrated software and hardware platform that simplifies development of any system that needs measurement and control.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","","","","");
INSERT INTO links VALUES("135","Enerpac","http://www.enerpac.com/en","Enerpac является признанным мировым лидером в области разработки высокопроизводительных инструментов и оборудования, используемых на промышленных рынках.","Enerpac","Enerpac is the recognized global leader in high-force tools and equipment used in industrial markets.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","","","","");
INSERT INTO links VALUES("136","Campbell","http://www.campbellsci.com/","В компании Campbell Scientific разрабатываются системы сбора данных, измерения и управления.","Кампбелл","Provides data acquisition and measurement and control systems that are customized to meet exact needs.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","","","","");
INSERT INTO links VALUES("137","HBM","http://www.hbm.com/","Компания является лидером рынка в области технологий и предлагает продукты и услуги для широкого спектра измерительных задач во многих отраслях.","HBM","The company is the technology and market leader and offers products and services for an extensive range of measurement applications in many industries.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","","","","");
INSERT INTO links VALUES("138","NTT","http://www.ntt.dk/","Компания NTT была создана в 1985 году с целью сбыта датчика нагрузки Штамма. Сегодня же они специализируются на многих других типах датчиков.","NTT","NTT is a Danish company originally formed in 1985 with the aim of marketing of Strain Gauges load cells. Today it provides many other types of transducers and sensors.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","","","","");
INSERT INTO links VALUES("139","Esimo","http://www.esimo.net/meta/links/index.jsp","548 ссылок на разные организации и сервисы о Мировом Океане","Esimo","548 links to various organizations and services related with the World Ocean","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","","","","");
INSERT INTO links VALUES("140","Морская коллегия","http://mk.esimo.ru/links/worldInfSystems.jsp","Ссылки на федеральные органы исполнительной власти; мореведческие организации России; международные организации и информационные системы (ИС); ведомственные ИС.","The Marine Board","Links to federal authorities, research organizations in Russia, international organizations and informational systems (IS).","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","","","","");
INSERT INTO links VALUES("141","Все о Геологии","http://geo.web.ru/db/top_geo.html","Каталог геологических ресурсов Сети. Сайт геологического факультета МГУ, созданный при поддержке РФФИ.","Все о Геологии","Web directory of geological resources. Site of the Geology Department of MSU, created with the support of RFBR.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","","","","");
INSERT INTO links VALUES("142","UNIS IPY","http://www.unis.no/20_RESEARCH/2070_IPY/ipy_links.htm","Список UNIS IPY (international polar year).","UNIS IPY","UNIS IPY list, rather short.","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","","","","");
INSERT INTO links VALUES("143","Arcus"," 	 http://www.arcus.org/arcus/links","Длинный список ссылок в алфавитном порядке","Arcus","Long list in Alphabetical order","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","","","","");
INSERT INTO links VALUES("144","енр","укеуцек","енг","кен","кен","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("145","енр","укеуцек","енг","кен","кен","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("146","енр","укеуцек","енг","кен","кен","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","","","","");
INSERT INTO links VALUES("147","апр","авр","апр","ыапр","ыапр","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","","","","");
INSERT INTO links VALUES("148","fhf","hsft","ftht","dfghdfd","fghdgf","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO links VALUES("149","ы","ва","ы","ы","ы","0","1","0","0","0","1","0","1","0","0","0","1","1","0","0","1","0","0","0","1","0","1","0","0","0","0","0","0","0");
INSERT INTO links VALUES("150","ы","ва","ы","ы","ы","0","1","0","0","0","1","0","1","0","0","0","1","1","0","0","1","0","0","0","1","0","1","0","0","0","0","0","0","0");
INSERT INTO links VALUES("151","ы","ва","ы","ы","ы","0","1","0","0","0","1","0","1","0","0","0","1","1","0","0","1","0","0","0","1","0","1","0","0","0","0","0","0","0");
INSERT INTO links VALUES("152","ы","ва","ы","ы","ы","0","1","0","0","0","1","0","1","0","0","0","1","1","0","0","1","0","0","0","1","0","1","0","0","0","0","0","0","0");



DROP TABLE IF EXISTS news;

CREATE TABLE `news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_en` text NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

INSERT INTO news VALUES("15","5","Мы наконец-таки выложили сайт в интернет!","Теперь есть возможность видеть, что происходит на сайте в реальном времени!","The Site is in the Internet now!","Now you can watch, how it is developing in real time!","12.12.2012");
INSERT INTO news VALUES("25","17","Члены Арктического совета разработают Полярный кодекс","12.04.2013 12:19 
INSERT INTO news VALUES("17","5","Доступ к сайту производится по паролю.","Теперь пользоваться сайтом могут только зарегистрированные пользователи. Для этого при входе требуется ввести свой e-mail и пароль, присланный в пригласительном письме. А далее этот пароль можно будет изменить в личном кабинете.","Now the access to the site is performed by password.","You can use your e-mail address and the password, which was sent you in invitational letter. It can be changed in your personal cabinet.","11.01.2013");
INSERT INTO news VALUES("19","5","Начинаем тестировать сайт...","   Дамы и Господа!
INSERT INTO news VALUES("22","5","Добавлен раздел с полезными ссылками.","Теперь Вы можете искать нужную Вам информацию, следуя по ссылкам разбитых по соответствующим темам. Список можно найти в Главном Меню в разделе \"Ссылки\" -> \"Интересные ссылки\".","The \"Useful Links\" section has been added.","Now you can find useful information by following the links divided in corresponding themes. The list could be found in Main Menu in section \"Links\" -> \"Useful links\".","28.02.2013");
INSERT INTO news VALUES("23","15","Добавлена английская версия сайта!","Добавлена английская версия сайта!","An English version of this site was added","An English version of this site was added","09.03.2013");
INSERT INTO news VALUES("24","15","Теперь можно восстанавливать пароль!","Просто перейдите по ссылке \"Забыли пароль?\" и проверьте почту.","Now you can receive new password","Just go to the link \"Forgot password?\" and check you mail.","10.04.2013");
INSERT INTO news VALUES("13","5","Теперь на сайт можно добавлять новости!","Ура, Товарищи! Новая форма работает и позволяет общаться на сайте путём размещения новостей персонально от впользователей сайта.","Here is working the news adder!","Congratulations! Our service can add the news now!","07.12.2012");
INSERT INTO news VALUES("26","17","Конференция «СЕВЕРНЫЙ МОРСКОЙ ПУТЬ: СОСТОЯНИЕ, ПРОБЛЕМЫ, ПЕРСПЕКТИВЫ». 11-12 апреля 2013. Санкт-Петербург ","<p>12 апреля 2013 года в Санкт-Петербурге («Дом Молодежи Санкт-Петербурга», Новоизмайловский пр. 48) прошла международная конференция «СЕВЕРНЫЙ МОРСКОЙ ПУТЬ: СОСТОЯНИЕ, ПРОБЛЕ</p><ul><li>МЫ, ПЕРСПЕКТИВЫ».
INSERT INTO news VALUES("27","17","Открыт сайт \"Администрации Северного Морского Пути\"","Адрес сайта:http://asmp.morflot.ru/
INSERT INTO news VALUES("28","17","Аркадий Дворкович провёл заседание Правительственной комиссии по обеспечению российского присутствия на архипелаге Шпицберген","1 марте 2013
INSERT INTO news VALUES("33","5","Русского заголовка для этой новости пока не существует.","Русского варианта для этой новости пока не существует.","There is no English Headline for this news yet.","There is no English Version for this news yet.","08.11.2013");
INSERT INTO news VALUES("34","5","Title","Вот картинка:
INSERT INTO news VALUES("37","5","Совещание по проекту СМИДА в Москве 2-3 июня","<p>Дорогие коллеги!<img src=\"http://cs625817.vk.me/v625817697/14ab/8tdEAlIGmoE.jpg\"><br></p><p>2-3 июня в вском<strong> Физико-Технич</strong>еском те пройдщание, посвящённое нашему проекту СМИДА. Программа этого совещания предоставлена в русском и английском вариантах: </p><p><a class=\"pdf\" href=\"fornews/SMIDA WORKSHOP Moscow_programm.docx\">SMIDA WORKSHOP Moscow_programm</a></p><p><a class=\"pdf\" href=\"fornews/SMIDA WS_M_pr_En.docx\">SMIDA WS_M_pr_En</a></p>","SMIDA workshop in Moscow 2-3 June","<p>Dear Colleagues,</p><p>At the Moscow Institute of Physics and Technology will take place a workshop of our project SMIDA June 2-3. Here is the program of the workshop in English and in Russian: </p><p><a class=\"pdf\" href=\"fornews/SMIDA WS_M_pr_En.docx\">SMIDA WS_M_pr_En</a>



DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `priv` int(1) NOT NULL,
  `fami` varchar(100) CHARACTER SET cp1251 NOT NULL,
  `name` varchar(100) CHARACTER SET cp1251 NOT NULL,
  `otch` varchar(100) CHARACTER SET cp1251 NOT NULL,
  `rang` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `mail` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `password` varchar(32) NOT NULL,
  `fami_en` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `otch_en` varchar(100) NOT NULL,
  `rang_en` varchar(255) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `pos_en` varchar(100) NOT NULL,
  `tel1` varchar(15) NOT NULL,
  `tel2` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `web` varchar(100) NOT NULL,
  `id_comp` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `fami` (`fami`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES("25","2","Марченко","Алексей","Валерьевич","Руководитель проекта","alekseym@unis.no","e92de833dd2f604d47189be9d65e528a","Marchenko","Alexey","Valer\'evich","Head of project","","","","","","","2");
INSERT INTO users VALUES("24","2","Жмур","Владимир","Владимирович","Ответственный за кооперацию от МФТИ","zhmur@hotmail.com","80ba9de194017143e75d7fedde185122","Zhmur","Vladimir","Vladimirovich","Responsible for MIPT cooperation","","","","","","","1");
INSERT INTO users VALUES("17","1","Марченко","Наталия","Адольфовна","Координатор","natalym@unis.no","ff28d13e099ef36ff9858d2ae40bc365","Marchenko","Natalia","Adolfovna","Coordinator","научный сотрудник","Research Associate","+4779023369","","+47790231","http://www.unis.no/35_STAFF/staff_webpages/technology/nataly_marchenko/default.htm","2");
INSERT INTO users VALUES("21","1","Фомин","Юрий","Владимирович","Представитель","yury.fomin88@gmail.com","6b30725f8b3f4aeb8dd39c88e9a903d3","Fomin","Yury","Vladimirovich","Representative","","","","","","","1");
INSERT INTO users VALUES("5","1","Поляков","Игорь","Николаевич","Администратор сайта","noggatur@ya.ru","81dc9bdb52d04dc20036dbd8313ed055","Polyakov","y7r6","Nikolaevich","Site administrator","студент","student","+79203047941","","","vk.com/igor.polyakov","1");
INSERT INTO users VALUES("15","1","Ишханян","Тигран","Артурович","Администратор сайта","tishkhanyan@gmail.com","5116136e01259bfebbf30ad754e2e854","Ishkhanyan","Tigran","Arturovich","Site administrator","Студент","Student","+79152525685","+37493483315","","http://dasr.mipt.ru","1");
INSERT INTO users VALUES("18","2","Марченко ","Наталия","","Тестовый пользователь","nataliya232@gmail.com","ff28d13e099ef36ff9858d2ae40bc365","Marchenko","Nataly","","Test user","","","","","","","2");
INSERT INTO users VALUES("19","2","Карулин","Евгений","Борисович","Исследователь","evgeny.b.k@gmail.com","8b377d10310670c0d07fa510c37878d0","Karulin","Evgeny","Borisovich","Researcher","","Leading researcher","","","","","5");
INSERT INTO users VALUES("20","2","Морозов","Евгений","Георгиевмч","участник ","egmorozov@mail.ru","d3f42356a7fdf7c748a700ccf971698e","Morozov","Eugene","Georgievich","","заведующий лабораторией Океанологического Института","","","","","","1");
INSERT INTO users VALUES("22","2","Шхинек","Карл","Натанович","Представитель СПбГПУ","shkhinek@cef.spbstu.ru","7b129f84f799424fcfccb12bf8b7605b","Shkhinek ","Karl ","Natanovich","Representant from SPBSPU","Профессор","Professor","","","","","3");
INSERT INTO users VALUES("23","2"," Огородов","Станислав","Анатольевич","Представитель МГУ"," ogorodov@aha.ru","a81617c2b49ea90dc6fed505ab94f26c","Ogorodov","Stanislav","Anatol\'evich","Representant from MSU","ведущий научный сотрудник","","","","","http://istina.imec","4");
INSERT INTO users VALUES("28","2","Абрамова","Анна","","","lademiel@yandex.ru","18758151cc6540db85c5ba76d5a00100","Abramova","Anna","","","","","","","","","4");
INSERT INTO users VALUES("29","1","Негодяев","Сергей","Серафимович","Декан ФАКИ","snegod@mail.ru","28adf7a3ed6e23ca6f52fc461f8a52b9","Negodayev","Sergey","Serafimovich","DASR Dean","","","","","","","1");
INSERT INTO users VALUES("34","2","g","dfg","dfg","sdfg","dsfg","d92966cda0ea8286812354b33000d79c","gsdfg","sdfg","dfg","sdfg","","","","","","","1");
INSERT INTO users VALUES("35","2","g","dfg","dfg","sdfg","dsfgdfsgsdf","d92966cda0ea8286812354b33000d79c","gsdfg","sdfg","dfg","sdfg","","","","","","","1");
INSERT INTO users VALUES("36","2","dfgsdf","g","sfgsdf","sdfg","efgsdg","bf408904342cf9d0c34f3279f0fc0d7c","dfgds","dsfg","sdfgsd","sdfg","","","","","","","1");


