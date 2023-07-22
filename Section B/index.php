<?php

require 'IBook.php';
require 'Book.php';
require 'BookList.php';

// Bắt đầu session
session_start();

// Kiểm tra xem đã có đối tượng BookList trong session chưa, nếu chưa thì tạo mới
if (!isset($_SESSION['my_books'])) {
    $_SESSION['my_books'] = new BookList();
}

// Lấy đối tượng ListBook từ session
$listBookInSession = $_SESSION['my_books'];

// Tạo một đối tượng Book mới và thêm nó vào đối tượng ListBook trong session
// $newBook = new Book('Book Name', 'Author Name', 'Publisher Name', '2000', 'ISBN Number', array('Chapter 1', 'Chapter 2', 'Chapter 3'));
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $publicationYear = $_POST['publicationYear'];
    $ISBN = $_POST['ISBN'];
    $chapters = explode(',', $_POST['chapters']);

    $newBook = new Book($name, $author, $publisher, $publicationYear, $ISBN, $chapters);
    $listBookInSession->addBook($newBook);
    $_SESSION['my_books'] = $listBookInSession;
}

// Xử lý chức năng sắp xếp danh sách sách
if (isset($_GET['sort'])) {
    $sortKey = $_GET['sort'];
    if ($sortKey == 'author') {
        $listBookInSession->sortBooksByAuthor();
    } elseif ($sortKey == 'name') {
        $listBookInSession->sortBooksByName();
    } elseif ($sortKey == 'year') {
        $listBookInSession->sortBooksByPublicationYear();
    }
}

include 'header.php';
?>
<table border="1">
    <tr>
        <th><a href="?sort=name">Tên sách</a></th>
        <th><a href="?sort=author">Tác giả</a></th>
        <th><a href="?sort=year">Năm xuất bản</a></th>
        <th>Nhà xuất bản</th>
        <th>ISBN</th>
        <th>Danh mục các chương sách</th>
    </tr>
    <?php foreach ($listBookInSession->getBooks() as $book): ?>
        <tr>
            <td><?php echo $book->getName(); ?></td>
            <td><?php echo $book->getAuthor(); ?></td>
            <td><?php echo $book->getPublicationYear(); ?></td>
            <td><?php echo $book->getPublisher(); ?></td>
            <td><?php echo $book->getISBN(); ?></td>
            <td><?php echo implode(', ', $book->getChapters()); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Thêm sách mới</h2>
<!-- Form để thêm sách mới -->
<form method="post" action="">
    <label for="name">Tên sách:</label>
    <input type="text" name="name" required><br>
    <label for="author">Tác giả:</label>
    <input type="text" name="author" required><br>
    <label for="publisher">Nhà xuất bản:</label>
    <input type="text" name="publisher" required><br>
    <label for="publicationYear">Năm xuất bản:</label>
    <input type="number" name="publicationYear" required min="2000" value="2023"><br>
    <label for="ISBN">ISBN:</label>
    <input type="text" name="ISBN" required><br>
    <label for="chapters">Danh mục các chương sách (phân tách bằng dấu phẩy):</label>
    <input type="text" name="chapters" required><br>
    <input type="submit" name="submit" value="Thêm sách">
</form>
<?php include 'footer.php';