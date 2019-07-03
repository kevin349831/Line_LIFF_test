<?php
mongoose.connect(process.env.MONGODB_URI || 'mongodb://localhost/test');

// 建立 model，後面的 {title: String} 就是 Schema
let Post = mongoose.model('Post', { title: String });
// 建立實體Document
let post = new Post({ title: 'My Awesome Goals for 2016!' });
// 存入資料庫
post.save(function (err) {
    if (err) {
        console.log(err);
    }
    console.log('Blog post saved!');
});
?>
