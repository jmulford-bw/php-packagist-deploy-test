# Getting started

Bandwidth's HTTP Messaging platform

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Bandwidth%20Messaging-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the BandwidthMessaging library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Bandwidth%20Messaging-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Bandwidth%20Messaging-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Bandwidth%20Messaging-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Bandwidth%20Messaging-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Bandwidth%20Messaging-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Bandwidth%20Messaging-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Bandwidth%20Messaging-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Bandwidth%20Messaging-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Bandwidth%20Messaging-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Bandwidth%20Messaging-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Bandwidth%20Messaging-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Bandwidth%20Messaging-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| user | user |
| pass | pass |



API client can be initialized as following.

```php
$user = 'user'; // user
$pass = 'pass'; // pass

$client = new BandwidthMessagingLib\BandwidthMessagingClient($user, $pass);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [APIController](#api_controller)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```php
$client = $client->getClient();
```

### <a name="list_media"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.listMedia") listMedia

> listMedia


```php
function listMedia(
        $userId,
        $continuationToken = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userId |  ``` Required ```  | TODO: Add a parameter description |
| continuationToken |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userId = 'userId';
$continuationToken = 'Continuation-Token';

$result = $client->listMedia($userId, $continuationToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 request is malformed or invalid |
| 401 | 401 The specified user does not have access to the account |
| 403 | 403  The user does not have access to the API |
| 404 | 404 he call-id is no longer active, or the path is not found |
| 409 | 409 Error when modifying a call that is unable to be modified |
| 415 | 415 The content-type of the request is incorrect |
| 429 | 429 The rate limit has been reached |
| 500 | 500 Unknown server error |
| 503 | 503 The service is unavailable for some reason |



### <a name="get_media"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getMedia") getMedia

> getMedia


```php
function getMedia(
        $userId,
        $mediaId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userId |  ``` Required ```  | TODO: Add a parameter description |
| mediaId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userId = 'userId';
$mediaId = 'mediaId';

$result = $client->getMedia($userId, $mediaId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 request is malformed or invalid |
| 401 | 401 The specified user does not have access to the account |
| 403 | 403  The user does not have access to the API |
| 404 | 404 he call-id is no longer active, or the path is not found |
| 409 | 409 Error when modifying a call that is unable to be modified |
| 415 | 415 The content-type of the request is incorrect |
| 429 | 429 The rate limit has been reached |
| 500 | 500 Unknown server error |
| 503 | 503 The service is unavailable for some reason |



### <a name="upload_media"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.uploadMedia") uploadMedia

> uploadMedia


```php
function uploadMedia(
        $userId,
        $mediaId,
        $contentLength,
        $body,
        $contentType = null,
        $cacheControl = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userId |  ``` Required ```  | TODO: Add a parameter description |
| mediaId |  ``` Required ```  | TODO: Add a parameter description |
| contentLength |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Optional ```  | TODO: Add a parameter description |
| cacheControl |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userId = 'userId';
$mediaId = 'mediaId';
$contentLength = 228;
$body = 'body';
$contentType = 'Content-Type';
$cacheControl = 'Cache-Control';

$client->uploadMedia($userId, $mediaId, $contentLength, $body, $contentType, $cacheControl);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 request is malformed or invalid |
| 401 | 401 The specified user does not have access to the account |
| 403 | 403  The user does not have access to the API |
| 404 | 404 he call-id is no longer active, or the path is not found |
| 409 | 409 Error when modifying a call that is unable to be modified |
| 415 | 415 The content-type of the request is incorrect |
| 429 | 429 The rate limit has been reached |
| 500 | 500 Unknown server error |
| 503 | 503 The service is unavailable for some reason |



### <a name="delete_media"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteMedia") deleteMedia

> deleteMedia


```php
function deleteMedia(
        $userId,
        $mediaId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userId |  ``` Required ```  | TODO: Add a parameter description |
| mediaId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userId = 'userId';
$mediaId = 'mediaId';

$client->deleteMedia($userId, $mediaId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 request is malformed or invalid |
| 401 | 401 The specified user does not have access to the account |
| 403 | 403  The user does not have access to the API |
| 404 | 404 he call-id is no longer active, or the path is not found |
| 409 | 409 Error when modifying a call that is unable to be modified |
| 415 | 415 The content-type of the request is incorrect |
| 429 | 429 The rate limit has been reached |
| 500 | 500 Unknown server error |
| 503 | 503 The service is unavailable for some reason |



### <a name="create_message"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createMessage") createMessage

> createMessage


```php
function createMessage(
        $userId,
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userId |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userId = 'userId';
$body = new MessageRequest();

$result = $client->createMessage($userId, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 request is malformed or invalid |
| 401 | 401 The specified user does not have access to the account |
| 403 | 403  The user does not have access to the API |
| 404 | 404 he call-id is no longer active, or the path is not found |
| 409 | 409 Error when modifying a call that is unable to be modified |
| 415 | 415 The content-type of the request is incorrect |
| 429 | 429 The rate limit has been reached |
| 500 | 500 Unknown server error |
| 503 | 503 The service is unavailable for some reason |



[Back to List of Controllers](#list_of_controllers)



