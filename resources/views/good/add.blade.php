<form action="/good/add" method="post">
  @csrf
  名前
  <input type="text" name="name">
  email
  <input type="text" name="email">
  年齢
  <input type="text" name="age">
  <input type="submit" name="" value="送信！！">
</form>