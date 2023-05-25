<?php

    require_once __DIR__ . '/vendor/autoload.php';
    \App\Common\Environment::loadEnv();

    $token = getenv('INSTA_KEY');
    $url = "https://graph.instagram.com/me/media?access_token=$token&fields=media_url,media_type,caption,permalink,thumbnail_url";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $response = json_decode(curl_exec($ch), true);
    curl_close($ch);

    if (empty($response['data']) || isset($response['error'])) :
        exit;
    else :
        $posts = count($response['data']) > 5 ? array_slice($response['data'], 0, 5) : '';
?>

        <section class="insta">
            <div class="insta__wrapper">
                <h2 class="section__title">Nos acompanhe no instagram</h2>
                <a class="button button--big-screen" href="https://www.instagram.com/sdcguarapari/"  target="_blank" rel="noopener noreferrer">Instagram</a>
            </div>
            <div class="insta__posts-wrapper">

<?php
        foreach ($posts as $key => $value) :
            $thumbnail = $value['media_type'] == 'VIDEO' ? $value['thumbnail_url'] : $value['media_url'];
            $caption = empty($value['caption']) ? '' : htmlspecialchars($value['caption'])
?>

                <a class="insta__post-links" href="<?= $value['permalink'] ?>" target="_blank" rel="noopener noreferrer">
                    <img class="insta__post" alt="<?= $caption ?>" title="<?= $caption ?>" src="<?= $thumbnail ?>">
                </a>

<?php
        endforeach;
?>

            </div>
            <div class="button-wrapper">
                <a class="button" href="https://www.instagram.com/sdcguarapari/"  target="_blank" rel="noopener noreferrer">Instagram</a>
            </div>
        </section>

<?php
    endif;
    exit;
?>