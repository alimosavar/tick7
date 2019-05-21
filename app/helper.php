<?php
function sweetAlert($messages = null, $icons = null)
{

    $message = $messages;
    $icon = $icons;
    echo '<script>
                                    swal({
                                      title: "کاربر گرامی:",
                                      text: "' . $message . '",
                                      icon: "' . $icon . '",
                                      button: "باشه!",
                                      timer: 7000,
                                    });
                                </script>';

}