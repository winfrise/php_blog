# php开发博客

> 参考:
> https://www.php.cn/faq/589516.html
> https://www.php.cn/faq/603320.html
> https://deepinout.com/php-tutorials/php-questions/976_2023_08_27_15922.html
> https://www.cnblogs.com/shaoguan/p/7336991.html [*]


#### 代码规范
在目录设置好以后，我们接下来规定代码的规范：

1. MySQL的表名需小写或小写加下划线，如：item，car_orders。
2. 模块名（Models）需用大驼峰命名法，即首字母大写，并在名称后添加Model，如：ItemModel，CarModel。
3. 控制器（Controllers）需用大驼峰命名法，即首字母大写，并在名称后添加Controller，如：ItemController，CarController。
4. 方法名（Action）需用小驼峰命名法，即首字母小写，如：index，indexPost。
5. 视图（Views）部署结构为控制器名/行为名，如：item/view.php，car/buy.php。

创建数据表

```
CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE comments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content TEXT NOT NULL,
    post_id INT NOT NULL,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(255)
);
```

```
CREATE TABLE videos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    tags TEXT NOT NULL,
    video_url TEXT NOT NULL,
    video_poster TEXT NOT NULL,
    content TEXT NOT NULL,
    author_id INT NOT NULL,
    create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```