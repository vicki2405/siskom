<script>
    function greetings() {
        let asiaTime = new Date().toLocaleString('en-US', {
            timeZone: 'Asia/Jakarta'
        });
        asiaTime = new Date(asiaTime);
        let hours = asiaTime.getHours();
        let msg = '';

        if (hours < 10) {
            msg = 'Assalamulaikum, Good Morning Indonesia!';
        } else if (hours >= 10 && hours < 16) {
            msg = 'Assalamulaikum,Good Afternoon Indonesia!';
        } else if (hours >= 16 && hours < 19) {
            msg = 'Assalamulaikum,Good Evening Indonesia!';
        } else {
            msg = 'Assalamulaikum,Good Night Indonesia!';
        }

        return msg;
    }
</script>
