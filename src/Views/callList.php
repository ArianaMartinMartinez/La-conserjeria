<?php
    require_once("Components/layout.php");
?>
<body>
    <?php
        require_once("Components/header.php");
    ?>

    <main>
        <div class="divButton">
            <a class="newIssue" href="?action=create"><button>New issue</button></a>
        </div>
        <table class="table">
                <tr class="headerList">
                    <th class='smallWidth'>Id</th>
                    <th>Date</th>
                    <th class='smallWidth'>Room</th>
                    <th>Issue</th>
                    <th>Area</th>
                    <th class='smallWidth'>Delete</th>
                    <th class='smallWidth'>Update</th>

                </tr>
        <?php
            foreach($data["call"] as $call) {
                echo "
                <tr>
                <td class='smallWidth'>{$call->getId()}</td>
                <td>{$call->getDateTime()}</td>
                <td class='smallWidth'>{$call->getRoom()}</td>
                <td>{$call->getIssue()}</td>
                <td>{$call->getArea()}</td>
                <td class='smallWidth'><a href='?action=delete&id={$call->getId()}'>🗑️</a></td>
                <td class='smallWidth'><a href='?action=update&id={$call->getId()}'>✏️</a></td>
                </tr>
                ";
            }
        ?>
         </table>
    </main>

    <?php
        require_once("Components/footer.php");
    ?>
</body>
