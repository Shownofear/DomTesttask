# DomTesttask
****************
Установка:
****************
скачать XAMPP https://www.apachefriends.org/ru/index.html.

скачать phpmyAdmin http://www.phpmyadmin.net/home_page/index.php

установить XAMPP to C: drive on recomended settings

разархивировать архив phpmyAdmin в папку 'HTdocs' пример "C:\XAMPP\HTdocs"

переименовать папку 'phpMyadmin-xxx-xxx-xxx' в 'phpMyadmin' 

разархивировать архив MyProject в папку 'HTdocs\xampp' пример 'C:\XAMPP\HTdocs\xampp'

****************
Настройка:
****************
запустить 'XMAPP controll pannel'

Start - Apache server

Start - MySQL server

открыть phpmyAdmin базу данных 'htttp://localhost/phpmyAdmin"

Cоздать базуданных "domdb"

Создать  таблицу в базе "domtable":
--------------------------------------------------
[ID]-(int, primary key, Auto incriment);
[Nick]-(varchar, 100,);
[Login]-(varchar, 100,);
[Email]-(varchar, 100,);
--------------------------------------------------
Заполнить таблицу тестовыми данными

****************
Тестирование:
****************
открыть прототип вебсайта для тестирования 'htttp://localhost/xampp/myProject/web'

Api находиться в 'C:\XAMPP\HTdocs\xamppmyProject\api'
