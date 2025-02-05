<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous" defer></script>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="./css/mobile.css" />
	<link rel="stylesheet" href="./css/post.css" />
	<link rel="stylesheet" href="./css/left_col.css" />
	<link rel="stylesheet" href="./css/profile.css" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

	<title>LiNK.ME</title>
</head>

<body>
	<header>
		<?php
		include('./templates/navbar.php');
		?>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2 text-center collapse" id="left-col">
				<div class="feed-change">
					<div id="feed-order">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="feedOrder" id="feedOrderRelevance">
								Relevance
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="feedOrder" id="feedOrderRecent" checked>
								Recent
							</label>
						</div>
					</div>
				</div>
				<div class="person-friends">
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/jlopes.png" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @JLopes </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/lizandroSilva.png" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Lizaaandro </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xavierMontanelas.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @XM </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/maria.png" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Maria </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xavierLopes.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @XLopes </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Xico </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Xico </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Xico </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Xico </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Xico </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Xico </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Xico </span>
							</a>
						</div>
					</div>
					<div class="post-header person-friends-header">
						<div class="col-1">
							<a href="./other_profile.php">
								<img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
							</a>
						</div>
						<div class="post-name col-6">
							<a href="./other_profile.php">
								<span id="name-tag" class="person-friends-name-tag"> @Xico </span>
							</a>
						</div>
					</div>
				</div>
				<div>
					<a href="./about.php" class="link-light">About</a>
					<span class="link-light"> | </span>
					<a href="./faq.php" class="link-light">FAQ</a>
				</div>
			</div>
			<div class="col-8">
				<div id="center-col">
					<div class="profile-info">
						<div>
							<img src="./images/joao0903.png" class="rounded-circle profile-info-picture" alt="joao0903 profile picture">
						</div>
						<span id="profile-name-tag">@joao0903</span>
						<br>
						<span id="profile-person-name">João Gonçalves</span>
						<br>
						<button type="button" id="link-us" class="btn btn-outline-primary">LiNK US</button>
					</div>
					<div class="post">
						<div class="container-fluid">
							<div class="row">
								<div class="post-header">
									<div class="col-1">
										<a href="other_profile.php">
											<img src="./images/joao0903.png" class="rounded-circle post-profile-pic" alt="Profile picture">
										</a>
									</div>
									<div class="post-name col-10">
										<a href="other_profile.php">
											<span id="name-tag"> @joao0903 </span>
											<span id="person-name"> João Gonçalves </span>
										</a>
									</div>
									<div class="col-1 three-dots">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
											<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
										</svg>
									</div>
								</div>
							</div>
							<div class="row">
								<a href="./post_page.php">
									<div class="post-text">
										<span id="text-description">Estou na A1, na A2, na A5 a chegar a Lisabona </span>
									</div>
								</a>
							</div>
							<div class="row">
								<div class="post-icons">
									<div class="row align-items-center">
										<div class="col-2">
											<div id="post-like">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
													<path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
												</svg>
												<span> 15 </span>
											</div>
										</div>
										<div class="col-2">
											<div id="post-dislike">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
													<path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
												</svg>
												<span> 3 </span>
											</div>
										</div>
										<div class="col">
											<div id="post-comment-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
													<path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
													<path d="M2.165 15.803l.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
												</svg>
												<span> 2 </span>
											</div>
										</div>
										<div class="col">
											<div class="row">
												<div class="post-date-date">
													<span> 21-02-2021 </span>
												</div>
											</div>
											<div class="row">
												<div class="post-date-time">
													<span> 12:55 </span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="post-comments">
							<hr>
							<div class="comment">
								<div class="container-fluid">
									<div class="row">
										<div class="col-2">
											<a href="#">
												<img src="./images/maria.png" class="rounded-circle post-comment-pic" alt="Profile picture">
											</a>
										</div>
										<div class="col-9 post-comment-div">
											<span class="post-comment-text"> Duas mãos no volante </span>
										</div>
										<div class="col-1 three-dots post-comment-div">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
												<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
											</svg>
										</div>
									</div>
								</div>
							</div>

							<div class="comment">
								<hr>
								<div class="container-fluid">
									<div class="row">
										<div class="col-2">
											<a href="#">
												<img src="./images/lizandroSilva.png" class="rounded-circle post-comment-pic" alt="Profile picture">
											</a>
										</div>
										<div class="col-9 post-comment-div">
											<span class="post-comment-text"> Estás a chegar a Lizaaabbooona? </span>
										</div>
										<div class="col-1 three-dots post-comment-div">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
												<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
											</svg>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>