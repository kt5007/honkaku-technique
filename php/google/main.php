<?php require_once dirname(__FILE__) . '/functions.php'; ?>

<body>
    <h1>コメントを入力してください</h1>
    <form action="" method="post" name="comment">
        <textarea name="comment" id="" rows="10" style="width:50%">
            <?= isset($_POST['comment']) ? htmlspecialchars($_POST['comment'], ENT_QUOTES) : '' ?></textarea>
        <button type="submit" name="operation" value="send">send</button>
    </form>
    <?php if (isset($_POST['operation']) && $_POST['operation'] === 'send'): ?>
        <?php $analyzed=analyzeSentiment($_POST['comment']) ?>
        <p>コメントの分析結果:</p>
        <pre><?php print_r(json_decode($analyzed)); ?></pre>
    <?php endif; ?>
</body>