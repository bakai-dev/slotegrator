## SQL
### A. Оценки студентов
> Создания таблиц
```sql
create table grade (
grade int null, min_mark int null, max_mark int null
);

create table students (
id int null,
name varchar(100) null, marks int null
);
```
> Запрос в базу данных созлания данных
```sql
-- Добавление данных в таблицу grade
INSERT INTO grade (grade, min_mark, max_mark) VALUES
  (10, 90, 100),
  (9, 80, 89),
  (8, 70, 79),
  (7, 60, 69),
  (6, 50, 59),
  (5, 40, 49),
  (4, 30, 39),
  (3, 20, 29),
  (2, 10, 19),
  (1, 0, 9);

-- Добавление данных в таблицу students
INSERT INTO students (id, name, marks) VALUES
   (1, 'Alice', 85),
   (2, 'Bob', 72),
   (3, 'Charlie', 93),
   (4, 'David', 55),
   (5, 'Eva', 89),
   (6, 'Frank', 78),
   (7, 'Grace', 34),
   (8, 'Helen', 67),
   (9, 'Ivan', 42),
   (10, 'Jack', 95);
```
> Запрос в базу данных выборка
```sql
 SELECT
     -- В данной части используется выражение CASE для определения имени студента в зависимости от оценки и диапазона оценок.
     -- Если оценка находится в диапазоне 8-10, то выводится имя студента, иначе выводится "low".
     CASE
         WHEN grade.grade BETWEEN 8 AND 10 THEN students.name
         WHEN grade.grade BETWEEN 1 AND 7 THEN 'low'
         END AS name,
     grade.grade,
     students.marks AS mark
 FROM
     students
         JOIN
     grade ON students.marks BETWEEN grade.min_mark AND grade.max_mark
-- Здесь происходит объединение таблицы students с таблицей grade на основе оценок студентов.
-- Это позволяет сопоставить оценки студентов с соответствующими диапазонами оценок из таблицы grade.
 ORDER BY
     -- В данной части происходит сортировка результатов.
     -- Оценки сортируются по убыванию, чтобы более высокие оценки были первыми.
     grade.grade DESC,
     -- Затем, если оценка находится в диапазоне 8-10, имена студентов с одинаковой оценкой сортируются в алфавитном порядке.
     CASE
         WHEN grade.grade BETWEEN 8 AND 10 THEN students.name
         ELSE NULL
         END,
     -- Если оценка находится в диапазоне 1-7, то студенты с одинаковой оценкой сортируются по оценке в порядке возрастания.
     CASE
         WHEN grade.grade BETWEEN 1 AND 7 THEN students.marks
         ELSE NULL
         END;
```
