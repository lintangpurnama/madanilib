<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <?php if ($this->session->flashdata('error')) : ?>
        <p>Error: <?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <?php echo form_open_multipart('users/do_upload'); ?>
    <input type="file" name="userfile" size="20" />
    <br /><br />
    <input type="submit" value="Upload File" />
    </form>
</body>

</html>