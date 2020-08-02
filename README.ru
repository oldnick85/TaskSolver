====================
==== TASKSOLVER ====
====================

TaskSolver - это проект, задачей которого является генерация решений типовых задач высшей и элементарной математики.
Текст решения выводится максимально подробно, как будто задачу решал человек вручную.

---------------------------------------
---- Использование в ручном режиме ----
---------------------------------------
1.  Установим систему компьютерной алгебры maxima:
        sudo apt install maxima
    установим систему компьютерной вёрстки LaTeX:
        sudo apt install texlive
    (могут отсутствовать необходимые пакеты, в этом случае 
    можно поставить texlive-full, но он весит больше 2 гигабайт)

2.  Каталог с проектом обозначим {PROJECT_DIR}:
        cd {PROJECT_DIR}

3.  Запускаем скрипт в режиме командной строки:
        maxima -b ts-cmdline.mac

4.  Выбираем вариант 
        s. Создать новый проект

5.  Имя проекта можно оставить по-умолчанию, нажав Enter

6.  Выбираем категорию задания:
        a. Алгебра

7.  Выбираем задание:
        1. Записать комплексное число в тригонометрическом виде

8.  Вводим параметры задания (для примера можно оставить по-умолчанию)

9.  Вводим название задания (для примера можно оставить по-умолчанию)

10. Выходим из меню ввода заданий:
        0. Выход

11. Сохраняем проект и генерируем документ с решениями:
        3. Сохранить решения и скомпилировать файл

12. В каталоге {PROJECT_DIR}\projects ищите PDF-файл с именем проекта

13. PROFIT!!!

----------------------------------------
---- Использование в режиме сервера ----
----------------------------------------
...мы работаем над этим...

-----------------------------------------
---- Использование в почтовом режиме ----
-----------------------------------------
...мы работаем над этим...