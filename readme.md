Laravel 5.4.*

Дамп базы данных находится в файле db.sql 

Запросы к API.

Кофе:
  1) Получить список кофе
  Запрос get /api/cofffee

  2) Получить данные о кофе по идентификатору
  Запрос get /api/coffee/{id} 
  Пример api/coffee/1

  3) Добавить новый кофе
  Запрос post /api/coffee/
    Пример:
    Данные json 
    {
      "name": "Latte",
      "value": 70
    }

  3) Изменить данные о кофе
  Запрос put/patch /api/coffee/{id}
    Пример
    id = 1
    Данные json 
    {
      "name": "Frappe",
      "value": 50
    }
  
  
Добавки:
  1) Получить список добавок
  Запрос get /api/topping

  2) Получить данные о добавке по идентификатору
  Запрос get /api/topping/{id} 
  Пример api/topping/1

  3) Добавить новую добаку
  Запрос post /api/topping/
    Пример:
    Данные json 
    {
      "name": "Siropec",
    }

  3) Изменить данные о добавке
  Запрос put/patch /api/topping/{id}
    Пример
    id = 1
    Данные json 
    {
      "name": "Sirop4ik",

    }
    
Заказы:    
  1) Получить список заказов
  Запрос get /api/order

  2) Получить данные о заказе
  Запрос get /api/order/{id} 
  Пример api/order/1
  


    
