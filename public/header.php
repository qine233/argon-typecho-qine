<html lang="zh-CN">

<head>
<title><?php $this->archiveTitle(array('category' => '分类 %s 下的文章', 'search' => '包含关键字 %s 的文章', 'tag' => '标签 %s 下的文章', 'author' => '%s 发布的文章'), '', ' - '); ?><?php $this->options->title(); ?></title>

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/Q-style.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/post.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/mobile.css');  ?>">


<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit" />
<meta name="format-detection" content="email=no" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="keywords" content="<?php echo $this->fields->keywords ? $this->fields->keywords : htmlspecialchars($this->_keywords); ?>" />
<meta name="description" content="<?php echo $this->fields->description ? $this->fields->description : htmlspecialchars($this->_description); ?>" />
<?php $this->header(); ?>


</head>