# REST API old version

The REST API market app old version

## Market API documentation

### Request

`GET products`

    GET /products?category=category-1&sort=name HTTP/1.1
    Host: api.market.com
    Authorization: Bearer 2YotnFZFEjr1zCsicMWpAA
    Accept: application/json

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:30 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 2

    [
      {
        "id": 1,
        "name": "Example product 1",
        "description": "Example product 1 description",
        "image_url": "https://cdn.market.com/images/products/product_1.png",
        "category": "category-1"
       },
       {
        "id": 4,
        "name": "Example product 4",
        "description": "Example product 4 description",
        "image_url": "https://cdn.market.com/images/products/product_4.png",
        "category": "category-1"
       }
      .....
    ]

# REST API new version

The REST API market new version, used version actual version v2

## Market API documentation

### Request products | used version 'v2'

`GET products`

    GET v2/products?category=category-1&sort=name HTTP/1.1
    Host: api.market.com
    Authorization: Bearer 2YotnFZFEjr1zCsicMWpAA
    Accept: application/json

### Response

    HTTP/1.1 200 OK
    Content-Type: application/json;charset=UTF-8

    [
      {
        "id": 1,
        "name": "Example product 1",
        "description": "Example product 1 description",
        "image_url": "https://cdn.market.com/images/products/product_1.png",
        "category": "category-1"
        "is_favorite": true
       },
       {
        "id": 4,
        "name": "Example product 4",
        "description": "Example product 4 description",
        "image_url": "https://cdn.market.com/images/products/product_4.png",
        "category": "category-1"
        "is_favorite": false    
       }
      .....
    ]

### Request products | update images

`Put images`

    GET v2/products/{product_id}/images HTTP/1.1
    Host: api.market.com
    Authorization: Bearer 2YotnFZFEjr1zCsicMWpAA
    Accept: application/json
    {
       "product_id": 1,
    }
### Response

    HTTP/1.1 200 OK
    Content-Type: application/json;charset=UTF-8

### Request Favorites | list

`GET favorites`

    GET /favorites HTTP/1.1
    Host: api.market.com
    Authorization: Bearer 2YotnFZFEjr1zCsicMWpAA
    Accept: application/json

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:30 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 2

    [
      {
        "id": 1,
        "name": "Example product 1",
        "description": "Example product 1 description",
        "image_url": "https://cdn.market.com/images/products/product_1.png",
        "category": "category-1"
       },
       {
        "id": 4,
        "name": "Example product 4",
        "description": "Example product 4 description",
        "image_url": "https://cdn.market.com/images/products/product_4.png",
        "category": "category-1"
       }
      .....
    ]


### Request Favorite | Add favorites

`POST favorites/add`

    GET /favorites HTTP/1.1
    Host: api.market.com
    Authorization: Bearer 2YotnFZFEjr1zCsicMWpAA
    Accept: application/json
    {
       "product_id": 1,
    }

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:30 GMT
    Status: 201 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 2


## API Possible errors
    Status code: 401 Unauthorized.
    
    Authentication error. The authorization token is invalid or missing.
    Status Code: 500 Internal Server Error.
    
    Server Error. Internal server failure while processing a request.
    Status code: 400 Bad Request
    
    Invalid request. For example, incorrect image format.
    Status code: 404 Not Found
    
    Resource not found. The product with the specified ID does not exist.

