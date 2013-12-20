<?php
class AppException extends Exception
{
}

class ValidationException extends AppException
{
}

class DBException extends AppException
{
}

class RecordNotFoundException extends AppException
{
}
