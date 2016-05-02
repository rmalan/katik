$(document).ready(function() {
	$('#keliling-persegi').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			beforeSend: function() {
				$('#loading-keliling-persegi').show();
				$('#result-keliling-persegi').hide();
			},
			success: function(data) {
				$('#loading-keliling-persegi').hide();
				$('#result-keliling-persegi').fadeIn('slow').html(data);
			}
		});
		return false;
	});
})

$(document).ready(function() {
	$('#luas-persegi').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			beforeSend: function() {
				$('#loading-luas-persegi').show();
				$('#result-luas-persegi').hide();
			},
			success: function(data) {
				$('#loading-luas-persegi').hide();
				$('#result-luas-persegi').fadeIn('slow').html(data);
			}
		});
		return false;
	});
})

$(document).ready(function () {
    $('#luas-persegipanjang').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-persegipanjang').show();
                $('#result-luas-persegipanjang').hide();
            },
            success: function (data) {
                $('#loading-luas-persegipanjang').hide();
                $('#result-luas-persegipanjang').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#keliling-persegipanjang').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-persegipanjang').show();
                $('#result-keliling-persegipanjang').hide();
            },
            success: function (data) {
                $('#loading-keliling-persegipanjang').hide();
                $('#result-keliling-persegipanjang').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#luas-segitiga').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-segitiga').show();
                $('#result-luas-segitiga').hide();
            },
            success: function (data) {
                $('#loading-luas-segitiga').hide();
                $('#result-luas-segitiga').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#keliling-segitiga').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-segitiga').show();
                $('#result-keliling-segitiga').hide();
            },
            success: function (data) {
                $('#loading-keliling-segitiga').hide();
                $('#result-keliling-segitiga').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#luas-jajargenjang').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-jajargenjang').show();
                $('#result-luas-jajargenjang').hide();
            },
            success: function (data) {
                $('#loading-luas-jajargenjang').hide();
                $('#result-luas-jajargenjang').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#keliling-jajargenjang').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-jajargenjang').show();
                $('#result-keliling-jajargenjang').hide();
            },
            success: function (data) {
                $('#loading-keliling-jajargenjang').hide();
                $('#result-keliling-jajargenjang').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#luas-trapesium').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-trapesium').show();
                $('#result-luas-trapesium').hide();
            },
            success: function (data) {
                $('#loading-luas-trapesium').hide();
                $('#result-luas-trapesium').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#keliling-trapesium').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-trapesium').show();
                $('#result-keliling-trapesium').hide();
            },
            success: function (data) {
                $('#loading-keliling-trapesium').hide();
                $('#result-keliling-trapesium').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#luas-layanglayang').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-layanglayang').show();
                $('#result-luas-layanglayang').hide();
            },
            success: function (data) {
                $('#loading-luas-layanglayang').hide();
                $('#result-luas-layanglayang').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#keliling-layanglayang').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-layanglayang').show();
                $('#result-keliling-layanglayang').hide();
            },
            success: function (data) {
                $('#loading-keliling-layanglayang').hide();
                $('#result-keliling-layanglayang').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#luas-belahketupat').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-belahketupat').show();
                $('#result-luas-belahketupat').hide();
            },
            success: function (data) {
                $('#loading-luas-belahketupat').hide();
                $('#result-luas-belahketupat').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#keliling-belahketupat').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-belahketupat').show();
                $('#result-keliling-belahketupat').hide();
            },
            success: function (data) {
                $('#loading-keliling-belahketupat').hide();
                $('#result-keliling-belahketupat').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#luas-lingkaran').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-lingkaran').show();
                $('#result-luas-lingkaran').hide();
            },
            success: function (data) {
                $('#loading-luas-lingkaran').hide();
                $('#result-luas-lingkaran').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#keliling-lingkaran').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-lingkaran').show();
                $('#result-keliling-lingkaran').hide();
            },
            success: function (data) {
                $('#loading-keliling-lingkaran').hide();
                $('#result-keliling-lingkaran').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})