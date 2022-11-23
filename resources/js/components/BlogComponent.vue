<template>
    <div class="container">
        <div class="">
            <div class="">
                <div class="">
                    <img class="blog-logo" :src="require('../images/logo.png')" />
                    <div class="blog-intro green-bg-color">
                        atashino-blog とは
                    </div>
                    <div class="blog-menu pink-bg-color">
                        <span>
                            色々なテーマについての内容をシェアするウェブサイト
                        </span>
                        <div class="blog-pages">
                            <div class="page-option">
                                <i class="fa-sharp fa-solid fa-caret-down arrow-icon"></i>
                                <a href="#">About</a>
                                <hr>
                            </div>
                            <div class="page-option">
                                <i class="fa-sharp fa-solid fa-caret-down arrow-icon"></i>
                                <a href="#content">Content</a>
                                <hr>
                            </div>
                        </div>
                        <div class="icon">
                            <div class="icon-left">
                                <i class="fa-brands fa-square-facebook"><a href="https://www.facebook.com/profile.php?id=100009399100340"></a></i>
                                <i class="fa-brands fa-instagram"><a href="https://www.instagram.com/fong_cchan11/"></a></i>
                            </div>
                            
                            <div class="icon-right">
                                <div></div>
                                <i @click="showSearch()" class="fa-solid fa-magnifying-glass"></i>
                                <div v-if="displaySearch" class="search">
                                    <input class="input-search">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="green-bg-color theme-content">
                        <div class="themes">
                            <div class="thump-topic image">
                                <div class="line-white">
                                    <p>勉強</p>
                                    <span class="topic-intro">勉強しましょう</span>
                                </div>
                            </div>
                            <div class="thump-topic image">
                                <div class="line-white">
                                    <p>仕事仕事</p>
                                    <span class="topic-intro">勉強しましょう</span>
                                </div>
                            </div>
                            <div class="thump-topic image">
                                <div class="line-white">
                                    <p>健康</p>
                                    <span class="topic-intro">勉強しましょう</span>
                                </div>
                            </div>
                        </div>
                        <div class="themes two-items">
                            <div class="thump-topic image">
                                <div class="line-white">
                                    <p>ファッション</p>
                                    <span class="topic-intro">勉強しましょう</span>
                                </div>
                            </div>
                            <div class="thump-topic image">
                                <div class="line-white">
                                    <p>生活</p>
                                    <span class="topic-intro">勉強しましょう</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pink-bg-color blog-list-content" id="content">
                        <div class="blog-list-title">BLOG LIST</div>
                        <div>好きなトピックを選んで楽しみに読んでくださいね。</div>
                        <hr class="short-line">
                    </div>
                    <div class="topic-line">
                        <hr class="hr-left">
                        <span class="topic-name">健康</span>
                        <hr class="hr-right">
                    </div>
                    <div class="green-bg-color theme-content">
                        <div class="themes">
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topic-line">
                        <hr class="hr-left">
                        <span class="topic-name">勉強</span>
                        <hr class="hr-right">
                    </div>
                    <div class="pink-bg-color theme-content">
                        <div class="themes">
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topic-line">
                        <hr class="hr-left">
                        <span class="topic-name">仕事</span>
                        <hr class="hr-right">
                    </div>
                    <div class="green-bg-color theme-content">
                        
                        <div class="themes">
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topic-line">
                        <hr class="hr-left">
                        <span class="topic-name">ファッション</span>
                        <hr class="hr-right">
                    </div>
                    <div class="pink-bg-color theme-content">
                        <div class="themes">
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topic-line">
                        <hr class="hr-left">
                        <span class="topic-name">生活</span>
                        <hr class="hr-right">
                    </div>
                    <div class="green-bg-color theme-content">
                        <div class="themes">
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                            <div class="post">
                                <img class="thump-theme" :src="require('../images/theme.jpg')" alt="">
                                <div class="pre-content">
                                    <div class="title">あなたにとって「健康」って何ですか？</div>
                                    <div class="time">２０２２年１０月１日</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="footer-menu">
                            <a href="#">Content</a>
                            <a href="#">About</a>
                        </div>
                        <div class="">
                            © 2022 フォンさん的なブログ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data() {
        return {
            displaySearch: false,
        }
    },
    methods: {
        showSearch() {
            this.displaySearch = true;
        }
    }
}
</script>

<style lang="scss" scoped>
.pink-bg-color {
    background-color: #fce6e0;
}

.green-bg-color {
    background-color: #fcf5e4;
}

.blog-logo {
    width: 100%;
}

.blog-intro {
    height: 40px;
    padding-top: 8px;
    font-size: 24px;
}

.blog-menu {
    height: 130px;
    padding: 20px 10px;

    .blog-pages {
        display: flex;
        text-align: center;
        justify-content: center;
        gap: 100px;
        margin-top: 20px;

        .page-option {
            width: 100px;
            .arrow-icon {
                color:#ef8a7f;
            }
        }
    }

    .icon {
        font-size: 23px;
        display: flex;
        margin-top: 10px;
        margin-right: -25px;
        .icon-left {
            width: 50%;
            gap: 26px;
            display: flex;
            justify-content: right;
            align-items: center;
        }
        .icon-right {
            width: 50%;
            text-align: left;
            gap: 25px;
            display: flex;
            align-items: center;
        }
        
        .fa-magnifying-glass:hover {
            color: #4c390e;
            z-index: 1;
        }
        .fa-instagram:hover {
            color: #4c390e;
        }
        .fa-square-facebook:hover {
            color: #4c390e;
        }
        .search {
            display: flex;
            .input-search {
                border-radius: 20px;
                border: 1px solid #7F7A7A;
                padding: 5px 10px;
                z-index: 0;
                width: 250px;
            }
        }
    }
}

.theme-content {
    padding: 20px 20px;

    .themes {
        display: flex;
        justify-content: space-around;
        margin: 30px;

        .thump-theme {
            width: 300px;
            height: 200px;
            border-radius: 8px 8px 0px 0px;
        }

        .thump-topic {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            width: 300px;
            height: 200px;
            border-radius: 8px;
        }

        .two-items {
            padding-top: 30px;
        }

        .post {
            background-color: #ffffff;
            height: 300px;
            border-radius: 8px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;s

            .title {
                margin-top: 15px;
            }

            .time {
                text-align: right;
                color: #7F7A7A;
                font-size: 14px;
                margin-top: 13px;
                margin-right: 20px;
            }

            // .pre-content {
            //     padding: 10px 10px;
            // }
        }
        .image {
            background-image: url('../images/theme.jpg');
            background-size: cover;
            background-repeat: no-repeat;

        .line-white {
            border: 2px solid #ffffff;
            margin: 20px;
            border-radius: 8px;
            height: 64%;
            text-align: center;
            align-items: center;
            padding-top: 27px;
            font-size: 22px;
            color: #fff;
            .topic-intro {
                background-color: #ffece7;
                opacity: 0.7;
                color: #ef8a7f;
            }
        }
        }
    }
}

.two-items {
    padding: 40px 80px;
}

.blog-list-content {
    height: 160px;
    padding-top: 32px;
    white-space: break-spaces;
    .blog-list-title {
        font-weight: 600px;
        font-size: 22px;
    }
}

.short-line {
    width: 75px;
    height: 3px;
    background-color: #ef8a7f;
    border: none;
    margin-bottom: 0px;
}

.footer {
    background-color: #787878;
    display: flex;
    color: #ffffff;
    justify-content: space-between;
    padding: 35px 60px;

    .footer-menu {
        display: flex;
        gap: 20px;
        color: #ffffff;
        a {
            color: #ffffff;
        }
    }
}

.topic-line {
    display: flex;
    margin: -10px;

    .hr-left {
        width: 40%;
        margin-left: 0;
        background-color: gray;
        border: none;
        height: 1px;
        color: #776846;
    }
    .hr-right {
    width: 40%;
    margin-right: 0;
    background-color: gray;
    border: none;
    height: 1px;
    color: #776846;
}
}
.topic-name {
    margin-top: -3px;
    margin-bottom: -8px;
    font-size: 20px;
    color: #8F7E61;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
a {
    text-decoration: none;
}
</style>