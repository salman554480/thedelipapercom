<?php
$page = "faq";
require_once('parts/top.php'); ?>
</head>

<body class="sb-nav-fixed">

    <?php require_once('parts/navbar.php'); ?>


    <?php

    // CREATE
    if (isset($_POST['add'])) {
        $question = $_POST['faq_question'];
        $answer = $_POST['faq_answer'];
        $product_id = $_POST['product_id'];

        $question = str_replace("'", "`", $question);
        $answer = str_replace("'", "`", $answer);

        mysqli_query($conn, "INSERT INTO faq (faq_question, faq_answer, product_id) VALUES ('$question', '$answer', $product_id)");
        header("Location: faq.php");
        exit;
    }

    // DELETE
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM faq WHERE faq_id = $id");
        header("Location: faq.php");
        exit;
    }

    // UPDATE
    if (isset($_POST['update'])) {
        $id = $_POST['faq_id'];
        $question = $_POST['faq_question'];
        $answer = $_POST['faq_answer'];
        $product_id = $_POST['product_id'];
        mysqli_query($conn, "UPDATE faq SET faq_question='$question', faq_answer='$answer', product_id=$product_id WHERE faq_id = $id");
        header("Location: faq.php");
        exit;
    }

    // Get Products
    $products = mysqli_query($conn, "SELECT * FROM product");

    // Get FAQs with product names
    $faqs = mysqli_query($conn, "SELECT faq.*, product.product_name FROM faq LEFT JOIN product ON faq.product_id = product.product_id ORDER BY faq.faq_id DESC");


    // Edit mode
    $edit = false;
    $edit_data = [
        'faq_id' => '',
        'faq_question' => '',
        'faq_answer' => '',
        'product_id' => ''
    ];

    if (isset($_GET['edit'])) {
        $edit = true;
        $id = $_GET['edit'];
        $result = mysqli_query($conn, "SELECT * FROM faq WHERE faq_id = $id");
        if ($row = mysqli_fetch_assoc($result)) {
            $edit_data = $row;
        }
    }
    ?>


    <div id="layoutSidenav">

        <?php require_once('parts/sidebar.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h4 class="mt-3">Faqs</h4>

                    <form method="POST">
                        <input type="hidden" name="faq_id" value="<?= $edit_data['faq_id'] ?>">
                        <div class="form-group mb-2">
                            <label>Question</label>
                            <input type="text" name="faq_question" class="form-control" required
                                value="<?= htmlspecialchars($edit_data['faq_question']) ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label>Answer</label>
                            <textarea name="faq_answer" class="form-control"
                                required><?= htmlspecialchars($edit_data['faq_answer']) ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label>Product</label>
                            <select name="product_id" class="form-control" required>
                                <option value="0">Home</option>
                                <?php while ($p = mysqli_fetch_assoc($products)): ?>
                                    <option value="<?= $p['product_id'] ?>"
                                        <?= $edit_data['product_id'] == $p['product_id'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($p['product_name']) ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <button type="submit" name="<?= $edit ? 'update' : 'add' ?>"
                            class="btn btn-<?= $edit ? 'warning' : 'primary' ?>">
                            <?= $edit ? 'Update' : 'Add' ?>
                        </button>
                        <?php if ($edit): ?>
                            <a href="faq.php" class="btn btn-secondary ml-2">Cancel</a>
                        <?php endif; ?>
                    </form>



                    <!-- List -->
                    <table class="table table-bordered my-3">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Product</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($faqs)): ?>
                                <tr>
                                    <td><?= htmlspecialchars($row['faq_question']) ?></td>
                                    <td><?= htmlspecialchars($row['faq_answer']) ?></td>
                                    <td><?= htmlspecialchars($row['product_name']) ?></td>
                                    <td>
                                        <a href="faq.php?edit=<?= $row['faq_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="faq.php?delete=<?= $row['faq_id'] ?>" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this FAQ?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>







            </main>

            <?php require_once('parts/footer.php'); ?>

        </div>

    </div>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php'); ?>

</body>

</html>