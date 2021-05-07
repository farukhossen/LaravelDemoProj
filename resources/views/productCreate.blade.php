<form action ="product" method="POST">
@csrf
    <input type="text" name="title" placeholder="Enter title "></input><br/><br/>
    <input type="text" name="detail" placeholder="Enter description"></input><br/><br/>
    <input type="number" name="price" placeholder="Enter price"></input><br/><br/>
    <button type="submit">Create Product</button>
</form>