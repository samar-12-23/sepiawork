<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPIA : Query Form</title>

    <link rel="stylesheet" href="{{ url('css/query.css') }}"/>
</head>
<body>
    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>Get in Touch</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="08731fe4-4e31-47e6-ae9b-64dc3030e93d">
            <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required/>
            <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required/>
            <textarea name="message" placeholder="Your Message" class="contact-inputs" required></textarea>
            <button type="submit">Submit <img src="{{ url('images/arrow_icon.png') }}" ></button>
        </form>
        <div class="contact-right">
            <img src="{{ url('images/right_img.png') }}" alt="">

        </div>

    </div>

    
</body>
</html>