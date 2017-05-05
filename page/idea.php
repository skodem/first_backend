<?php Head('İdeanı paylaş')?>
<body>
<?php Menu()?>
	<section class="idea-form">
		<div class="center">
			<div class="title">
				<h1>ƏLAQƏ</h1>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2148.592580327192!2d49.825069124706204!3d40.39624917847065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDIzJzQ2LjciTiA0OcKwNDknMzUuNCJF!5e0!3m2!1sru!2sru!4v1465568054240" frameborder="0" style="border:0" allowfullscreen></iframe>
			<form method="post" action="/sendidea">
				<input type="text" name="fullname" placeholder="Ad, Soyad" maxlength="30" required>
				<br><input type="email" name="email" placeholder="E-mail" maxlength="30" required>
				<br><input type="text" name="topic" placeholder="Mövzu" maxlength="50" required>
				<br><textarea name="ideatext" placeholder="Qısaca ideyanız haqqında" cols="21" rows="5" maxlength="1000" required></textarea>
				<br><input type="submit" name="send" value="Göndər">
			</form>
		</div>
	</section>
	<section class="partners_tf">
		<div class="center">
			<a href="/terefdaslar"><img src="img/partners.png" alt="Partners"></a>
		</div>
	</section>
<?php Footer()?>
</body>
</html>