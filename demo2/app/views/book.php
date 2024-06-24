<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/book.css">
    <script src="http://localhost/demo2/app/asset/js/popup.js" defer></script>
    <title>Document</title>
</head>
<body>
    <button><a href="http://localhost/demo2/home/index">Home</a></button>
    <button id="addBookButton" onclick="openPopup()">Add Book</button>
    <div class="book">
        <div id="addBook" class="add-book">
            <form id="bookForm" method="POST" action="/demo2/admin/create" class="form-1">
                <h1>Nhập Thông Tin Sách</h1>
                <a class="close" onclick="closePopup()">&times;</a>
                <input type="hidden" name="id" value="<?php echo isset($book) ? ($book['id']) : "-1"; ?>">
                <label for="title">Tên Sách:</label>
                <input type="text" id="title" name="title" value="<?php echo isset($book) ? $book['title'] : ''; ?>" required>

                <label for="author">Tên Tác Giả:</label>
                <input type="text" id="author" name="author" value="<?php echo isset($book) ? ($book['author']) : ''; ?>" required>

                <label for="year">Năm Xuất Bản:</label>
                <input type="number" id="year" name="year" value="<?php echo isset($book) ? ($book['year']) : ''; ?>" required>

                <label for="description">Mô Tả Sách:</label>
                <textarea id="description" name="description" rows="4" required><?php echo isset($book) ? ($book['description']) : ''; ?></textarea>

                <label for="image">Link Ảnh:</label>
                <input type="url" id="image" name="image" value="<?php echo isset($book) ? ($book['image']) : ''; ?>">

                <label for="price">Giá Tiền:</label>
                <input type="number" id="price" name="price" value="<?php echo isset($book) ? ($book['price']) : ''; ?>" required>

                <label for="oldPrice">Giá Cũ:</label>
                <input type="number" id="oldPrice" name="oldPrice" value="<?php echo isset($book) ? ($book['oldprice']) : ''; ?>" required>
                <input type="submit" value="Submit">
            </form>
        </div>

        <div class="book-list-container">
            <h2>Danh Sách Sách</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Old Price</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?= $book['id'] ?></td>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['year'] ?></td>
                        <td><?= $book['description'] ?></td>
                        <td><img src="<?= ($book['image']) ?>" alt="Book Image" width="50"></td>
                        <td><?= $book['price'] ?></td>
                        <td><?= $book['oldprice'] ?></td>
                        <td>
                            <a href="http://localhost/demo2/admin/deleteBook/<?= $book['id'] ?>">Delete</a>
                            <a href="http://localhost/demo2/admin/editBook/<?= $book['id'] ?>" onclick="openPopup()">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
