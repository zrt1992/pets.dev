---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->

# Info

Welcome to the generated API reference.
[Get Postman Collection](http://pets.dev/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_fb2ae43e2e99ff4e90f22ba03801a735 -->
## Register

Register a new user into our system.

> Example request:

```bash
curl -X POST "http://pets.dev/api/v1/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/logout",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/logout`


<!-- END_fb2ae43e2e99ff4e90f22ba03801a735 -->

<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## Login user

Login a user and return his token which will be user with header Bearer {{token}}

> Example request:

```bash
curl -X POST "http://pets.dev/api/v1/login" \
-H "Accept: application/json" \
    -d "email"="harmon85@example.com" \
    -d "password"="dolorum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/login",
    "method": "POST",
    "data": {
        "email": "harmon85@example.com",
        "password": "dolorum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/login`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 
    password | string |  required  | 

<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
## api/v1/register

> Example request:

```bash
curl -X POST "http://pets.dev/api/v1/register" \
-H "Accept: application/json" \
    -d "name"="dolor" \
    -d "email"="mwilkinson@example.com" \
    -d "password"="dolor" \
    -d "phone_number"="dolor" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/register",
    "method": "POST",
    "data": {
        "name": "dolor",
        "email": "mwilkinson@example.com",
        "password": "dolor",
        "phone_number": "dolor"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/register`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Maximum: `255`
    email | email |  required  | Maximum: `255`
    password | string |  required  | Minimum: `6`
    phone_number | string |  required  | 

<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->

<!-- START_a62f1703e9fba891a3e20ff27854aac0 -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://pets.dev/api/v1/password/reset" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/password/reset",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/password/reset`


<!-- END_a62f1703e9fba891a3e20ff27854aac0 -->

<!-- START_6b3de9951427e0eac2591caa37cc54d2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://pets.dev/api/v1/pets" \
-H "Accept: application/json" \
    -d "category_id"="vel" \
    -d "color_id"="vel" \
    -d "age"="vel" \
    -d "email"="mbeer@example.org" \
    -d "full_name"="vel" \
    -d "description"="vel" \
    -d "phone_no"="vel" \
    -d "city_id"="vel" \
    -d "activation_code"="vel" \
    -d "is_pedigree"="vel" \
    -d "kcp_number"="vel" \
    -d "is_vaccinated"="vel" \
    -d "is_active"="vel" \
    -d "is_verified"="vel" \
    -d "require_checking"="vel" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/pets",
    "method": "POST",
    "data": {
        "category_id": "vel",
        "color_id": "vel",
        "age": "vel",
        "email": "mbeer@example.org",
        "full_name": "vel",
        "description": "vel",
        "phone_no": "vel",
        "city_id": "vel",
        "activation_code": "vel",
        "is_pedigree": "vel",
        "kcp_number": "vel",
        "is_vaccinated": "vel",
        "is_active": "vel",
        "is_verified": "vel",
        "require_checking": "vel"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/pets`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    category_id | string |  required  | 
    color_id | string |  required  | 
    age | string |  required  | 
    email | email |  required  | 
    full_name | string |  required  | 
    description | string |  required  | 
    phone_no | string |  required  | 
    city_id | string |  required  | 
    activation_code | string |  required  | 
    is_pedigree | string |  required  | 
    kcp_number | string |  required  | 
    is_vaccinated | string |  required  | 
    is_active | string |  required  | 
    is_verified | string |  required  | 
    require_checking | string |  required  | 

<!-- END_6b3de9951427e0eac2591caa37cc54d2 -->

<!-- START_bdd3ccf7db9f96843f0bb3617eac0164 -->
## Show all categories

> Example request:

```bash
curl -X GET "http://pets.dev/api/v1/categories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/categories",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 16,
        "parent_id": null,
        "order": 1,
        "name": "Reptiles",
        "slug": "reptiles",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/2qJB7npgD4nuhZdKDK9S.jpg",
        "created_at": "2017-06-06 10:07:26",
        "updated_at": "2017-06-09 12:47:05",
        "children": []
    },
    {
        "id": 13,
        "parent_id": null,
        "order": 1,
        "name": "Dogs",
        "slug": "dogs",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/Dk2IQ0koyDHYvhTIFkR2.jpg",
        "created_at": "2017-06-06 10:01:07",
        "updated_at": "2017-06-09 12:48:16",
        "children": [
            {
                "id": 17,
                "parent_id": 13,
                "order": 1,
                "name": "Pug",
                "slug": "pug",
                "image": "http:\/\/localhost\/storage\/categories\/June2017\/qZpiNhW7FRfssXVYoyWB.jpg",
                "created_at": "2017-06-07 08:03:18",
                "updated_at": "2017-06-09 12:46:49"
            }
        ]
    },
    {
        "id": 14,
        "parent_id": null,
        "order": 1,
        "name": "Cats",
        "slug": "cats",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/91rW0SJSjwmjng0L5xgu.jpg",
        "created_at": "2017-06-06 10:02:03",
        "updated_at": "2017-06-09 12:47:56",
        "children": [
            {
                "id": 18,
                "parent_id": 14,
                "order": 1,
                "name": "Russian cat",
                "slug": "russian-cat",
                "image": "http:\/\/localhost\/storage\/categories\/June2017\/JS2XWBKaWGqatGOQOuuK.jpg",
                "created_at": "2017-06-09 12:46:21",
                "updated_at": "2017-06-09 12:46:21"
            }
        ]
    },
    {
        "id": 15,
        "parent_id": null,
        "order": 1,
        "name": "Birds",
        "slug": "birds",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/T7WWWF03uGZLxC7cfuBS.jpg",
        "created_at": "2017-06-06 10:03:04",
        "updated_at": "2017-06-09 12:47:31",
        "children": [
            {
                "id": 19,
                "parent_id": 15,
                "order": 1,
                "name": "African grey",
                "slug": "african-grey",
                "image": "http:\/\/localhost\/storage\/categories\/June2017\/N2RQrO6ZfHdChh9JiZrS.jpg",
                "created_at": "2017-06-10 09:05:00",
                "updated_at": "2017-06-10 09:05:00"
            }
        ]
    },
    {
        "id": 17,
        "parent_id": 13,
        "order": 1,
        "name": "Pug",
        "slug": "pug",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/qZpiNhW7FRfssXVYoyWB.jpg",
        "created_at": "2017-06-07 08:03:18",
        "updated_at": "2017-06-09 12:46:49",
        "children": []
    },
    {
        "id": 18,
        "parent_id": 14,
        "order": 1,
        "name": "Russian cat",
        "slug": "russian-cat",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/JS2XWBKaWGqatGOQOuuK.jpg",
        "created_at": "2017-06-09 12:46:21",
        "updated_at": "2017-06-09 12:46:21",
        "children": []
    },
    {
        "id": 19,
        "parent_id": 15,
        "order": 1,
        "name": "African grey",
        "slug": "african-grey",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/N2RQrO6ZfHdChh9JiZrS.jpg",
        "created_at": "2017-06-10 09:05:00",
        "updated_at": "2017-06-10 09:05:00",
        "children": []
    }
]
```

### HTTP Request
`GET api/v1/categories`

`HEAD api/v1/categories`


<!-- END_bdd3ccf7db9f96843f0bb3617eac0164 -->

<!-- START_e60c504ad79be082cc1e18d97dcf0736 -->
## Get only parents

> Example request:

```bash
curl -X GET "http://pets.dev/api/v1/categories/parents" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/categories/parents",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 15,
        "parent_id": null,
        "order": 1,
        "name": "Birds",
        "slug": "birds",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/T7WWWF03uGZLxC7cfuBS.jpg",
        "created_at": "2017-06-06 10:03:04",
        "updated_at": "2017-06-09 12:47:31"
    },
    {
        "id": 14,
        "parent_id": null,
        "order": 1,
        "name": "Cats",
        "slug": "cats",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/91rW0SJSjwmjng0L5xgu.jpg",
        "created_at": "2017-06-06 10:02:03",
        "updated_at": "2017-06-09 12:47:56"
    },
    {
        "id": 13,
        "parent_id": null,
        "order": 1,
        "name": "Dogs",
        "slug": "dogs",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/Dk2IQ0koyDHYvhTIFkR2.jpg",
        "created_at": "2017-06-06 10:01:07",
        "updated_at": "2017-06-09 12:48:16"
    },
    {
        "id": 16,
        "parent_id": null,
        "order": 1,
        "name": "Reptiles",
        "slug": "reptiles",
        "image": "http:\/\/localhost\/storage\/categories\/June2017\/2qJB7npgD4nuhZdKDK9S.jpg",
        "created_at": "2017-06-06 10:07:26",
        "updated_at": "2017-06-09 12:47:05"
    }
]
```

### HTTP Request
`GET api/v1/categories/parents`

`HEAD api/v1/categories/parents`


<!-- END_e60c504ad79be082cc1e18d97dcf0736 -->

<!-- START_803c6d683cf1f4271c5da712d753ed98 -->
## api/v1/categories/childs/{parent_slug}

> Example request:

```bash
curl -X GET "http://pets.dev/api/v1/categories/childs/{parent_slug}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/categories/childs/{parent_slug}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/categories/childs/{parent_slug}`

`HEAD api/v1/categories/childs/{parent_slug}`

`POST api/v1/categories/childs/{parent_slug}`

`PUT api/v1/categories/childs/{parent_slug}`

`PATCH api/v1/categories/childs/{parent_slug}`

`DELETE api/v1/categories/childs/{parent_slug}`


<!-- END_803c6d683cf1f4271c5da712d753ed98 -->

