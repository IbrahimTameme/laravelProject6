<form action="/added" method="post" enctype="multipart/form-data">
    @csrf
    <label>Candy Image:</label>
    <input type="file" name="img" required>
    <input type="submit" name="addItem" value="Add">
    </form>