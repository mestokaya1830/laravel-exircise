<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    li{
      display: flex;
      margin: 3px 0;
    }
    li > span {
      margin: 0 10px;
      text-align: left;
      min-width: 80px;
    }
  </style>
</head>
<body>
  <h2>Add Product</h2>
  <ul>
   <form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('put')
    <li><input type="text" name="name" value="{{ $product->name }}"></li>
    <li><input type="text" name="price" value="{{ $product->price }}"></li>
    <li><input type="submit" value="Update"></li>
   </form>
  </ul>
</body>
</html>