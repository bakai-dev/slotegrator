## Модификация DDL
1. Индексы
     >Создать "индексы", они помогут быстрее находить нужные записи. .
     В данном случае, вы можете создать индексы для полей grade и marks в таблице students. 
     Например:
      ```sql
       CREATE INDEX idx_grade ON students (grade);
       CREATE INDEX idx_marks ON students (marks);
      ```
   
2. Денормализация: Добавьте поле grade в таблицу students, чтобы хранить оценку прямо там.
   Например:
      ```sql
   CREATE TABLE students (
    id INT PRIMARY KEY,
    name VARCHAR(100) NULL,
    marks INT NULL,
    grade INT NULL,
     );
   ```
3. Кэширование: Используйте кэширование для хранения часто запрашиваемых данных, таких как оценки и имена студентов. 
   Это может значительно сократить количество запросов к базе данных.
