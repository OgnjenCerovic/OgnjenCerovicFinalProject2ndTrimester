<style>
    .greeting {
        font-family: var(--MEGA);
        display: flex;
        flex-direction: row;
        row-gap: 20px;
        width: 100%;
        height: 100px;
        background-color: #122f1a;
        justify-content: space-between;
        padding: 20px;
        color: white;
    }

    .digital-watch {
        font-size: 2rem;
        color: white;
        text-align: center;
        display: flex;
        align-items: start;
        padding-left: 20px;
    }
</style>

<div class="greeting">
    <div>
        <p>
            <?php
            if (isset($_SESSION['user'])) {
                echo "Welcome, " . $_SESSION['user']['name'];
            } else {
                echo "No user information available.";
            }
            ?>
        </p>
        <a href="/logout">Logout</a>
    </div>

    <div class="digital-watch" id="digitalWatch"></div>
</div>
<script>
    function updateDigitalWatch() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        const timeString = `${hours}:${minutes}:${seconds}`;
        document.getElementById('digitalWatch').innerText = timeString;
    }
    setInterval(updateDigitalWatch, 1000);
    updateDigitalWatch();
</script>