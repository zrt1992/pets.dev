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

<!-- START_10b55fd4a517617fd27cfcc4d13f2f91 -->
## api/v1/pets

> Example request:

```bash
curl -X GET "http://pets.dev/api/v1/pets" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/pets",
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
`GET api/v1/pets`

`HEAD api/v1/pets`


<!-- END_10b55fd4a517617fd27cfcc4d13f2f91 -->

<!-- START_aaf644d0cf1aeb89645454159ebe283d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://pets.dev/api/v1/pets/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/pets/create",
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
`GET api/v1/pets/create`

`HEAD api/v1/pets/create`


<!-- END_aaf644d0cf1aeb89645454159ebe283d -->

<!-- START_6b3de9951427e0eac2591caa37cc54d2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://pets.dev/api/v1/pets" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/pets",
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
`POST api/v1/pets`


<!-- END_6b3de9951427e0eac2591caa37cc54d2 -->

<!-- START_d7bd26e6c358874539c80569e7e94869 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://pets.dev/api/v1/pets/{pet}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/pets/{pet}",
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
`GET api/v1/pets/{pet}`

`HEAD api/v1/pets/{pet}`


<!-- END_d7bd26e6c358874539c80569e7e94869 -->

<!-- START_7399f92bfa984d7e7824e3b248fd62d8 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://pets.dev/api/v1/pets/{pet}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/pets/{pet}/edit",
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
`GET api/v1/pets/{pet}/edit`

`HEAD api/v1/pets/{pet}/edit`


<!-- END_7399f92bfa984d7e7824e3b248fd62d8 -->

<!-- START_2c6e2d90eaaeaa4e187052843882a61b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://pets.dev/api/v1/pets/{pet}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/pets/{pet}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/pets/{pet}`

`PATCH api/v1/pets/{pet}`


<!-- END_2c6e2d90eaaeaa4e187052843882a61b -->

<!-- START_89959b16d1bc76f3be11ce1d07bc8499 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://pets.dev/api/v1/pets/{pet}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://pets.dev/api/v1/pets/{pet}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/pets/{pet}`


<!-- END_89959b16d1bc76f3be11ce1d07bc8499 -->

