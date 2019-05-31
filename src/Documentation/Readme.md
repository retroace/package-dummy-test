To use this package make sure your user modal has the `isAdmin` methods on it. That returns true or false depending on the authenticated user.

The sample of the code might be similar to the below code

```
public static function isAdmin() 
{
	return (auth()->user()->type === 'superuser');
}
```


