<?php
require_once("Components/layout.php");
?>
<body>
    <?php
    require_once("Components/header.php");
    ?>
    <main>
        <h2>Update issue</h2>
        <a href="./index.php" class="newIssue">
            <button>Cancel</button>
        </a>

        <form action='?action=storeUpdate&id=<?php echo "{$data["call"]->getId()}" ?>' method="post">
            <div>
                <label for="room">Room</label>
                <input type="number" name="room" required value="<?php echo "{$data["call"]->getRoom()}" ?>">
            </div>

            <div class="divIssue">
                <label for="issue">Issue</label>
                <textarea name="issue" rows="7" cols="30" placeholder="Write the incident here" required><?php echo "{$data["call"]->getIssue()}" ?></textarea>
            </div>

            <div>
                <label for="area">Area</label>
                <input type="text" name="area" required value="<?php echo "{$data["call"]->getArea()}" ?>">
            </div>

            <div>
                <label for="dateTime">Date</label>
                <input type="date" name="dateTime" required value="<?php echo "{$data["call"]->getDateTime()}" ?>">
            </div>

            <div>
                <button type="submit" class="updateBtn">Update</button>
                <button type="reset" class="resetBtn">Reset</button>
            </div>
        </form>
    </main>
    <?php
    require_once("Components/footer.php");
    ?>
</body>