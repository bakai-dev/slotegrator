## Composer: Процесс обновления зависимости
>Разработка:
1. Получить все последние изменения с репозитория | git pull.
2. Создайте новую ветку для внесения изменений в библиотеку
   зависит от методологии например git checkout -b feat/update-library
3. Внесите необходимые изменения с учетом филосовии этого проекта (например учетом паттернов проектирования).
4. Написания тестов, если есть необходимость.

> Тестирование:
1. Запустите тесты для вашего проекта.
2. Убедитесь, что все тесты проходят успешно и изменения не приводят к ошибкам.

> Релиз:
1. Когда изменения успешно протестированы, выполните коммит и пуш изменений в ветку update-library:
2. Создайте Pull Request в Git-репозитории и проверка CI/CD
3. Код ревью и подтверждение PR от соответствующих коллег.
4. После подтверждения PR, выполните слияние в ветку.
5. Тестирования на STG | DEV сервере.

> Деплой проекта:
1. После успешного слияния PR и подтверждения изменений, выполните релиз в главную ветку
2. Если у вас есть автоматический процесс деплоя, убедитесь, что новая версия проекта успешно развернута с обновленной библиотекой.
