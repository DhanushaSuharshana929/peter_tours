<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $PHOTO_ALBUM = new PhotoAlbum(NULL);
    $VALID = new Validator();

    $PHOTO_ALBUM->title = $_POST['title'];
    $PHOTO_ALBUM->description = $_POST['description'];

    $dir_dest = '../../upload/photo-album/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 336;
        $handle->image_y = 275;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PHOTO_ALBUM->image_name = $imgName;
    $PHOTO_ALBUM->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/photo-album/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 336;
        $handle->image_y = 275;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PHOTO_ALBUM = new PhotoAlbum($_POST['id']);

    $PHOTO_ALBUM->image_name = $_POST['oldImageName'];
    $PHOTO_ALBUM->title = $_POST['title'];
    $PHOTO_ALBUM->description = $_POST['description'];

    $PHOTO_ALBUM->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $PHOTO_ALBUM = PhotoAlbum::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}