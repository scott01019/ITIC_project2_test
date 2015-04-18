var current_page = 0;

$(document).ready(function() {
	$(document.body).on('click', '.next_page, .prev_page', function() {
		$('#user-container').children().remove();

		if ($(this).hasClass('next_page')) current_page++;
		else current_page--;

		$.ajax({
			url: '../../php/paginate_users.php',
			type: 'post',
			dataType: 'json',
			data: { next_page: current_page },
			success: function(data) {
				if (data.length < 5) $('.next_page').hide();
				else $('.next_page').show();

				if (current_page == 0) $('.prev_page').hide();
				else $('.prev_page').show();

				displayUsers(data);
			},
			error: function() {
				console.log('error error error');
			}
		});
	});

	$.ajax({
		url: '../../php/paginate_users.php',
		type: 'post',
		dataType: 'json',
		data: { next_page: current_page },
		success: function(data) {
			if (data.length < 5) $('.next_page').hide();
			else $('.next_page').show();

			if (current_page == 0) $('.prev_page').hide();
			else $('.prev_page').show();

			displayUsers(data);
		},
		error: function() {
			console.log('error error error');
		}
	});
});

function displayUsers(users) {
	$.ajax({
		url: '../../php/get_profile_img.php',
		type: 'post',
		dataType: 'json',
		data: { users: users },
		success: function(data) {
			for (var i = 0; i < data.length; ++i) {
				if (i % 5 == 0) $('#user-container').append("<div id='row" + Math.floor(i/5) + "' class='row'></div>");
				var entry = '<a href="other_user_profile.php?user=' + users[i] + '">'
							+ '<div class="user-container"><div class="thumbnail">'
							+ '<img class="view-users-img" src="../../resources/images/profiles/' + data[i] + '" alt="...">'
							+ '<div class="caption"><h3 class="text-center">' + users[i] + '</h3></div></div></div>';
				$('#row' + Math.floor(i/5)).append(entry);
			}
		}, error: function() {
			console.log('fail');
		}
	});
}