<form class="" action="/board/add" method="post">
  @csrf
  id
  <input type="number" name="person_id">
  タイトル
  <input type="text" name="title" value="">
  メッセージ
  <input type="text" name="message" value="">
  <input type="submit" name="" value="追加">
</form>