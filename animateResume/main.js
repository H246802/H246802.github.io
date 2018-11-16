/*
* 代码主要原理在于innerHtml的使用
* */
$(function () {
  const page = {
    text: {
      // 简历
      resume: function () {
        return `# 贺会强

## 个人信息
- 男/1995.11
- 联系方式:18322803026 | huiqianghe183@gmail.com
- 本科/景德镇陶瓷大学信息与计算科学
- 工作年限：2年
- 技术博客：<https://www.cnblogs.com/h246802/>
- Github：<https://github.com/h246802>
- 期望职位：web前端开发
- 期望薪资：税前月薪10k~12k

## 工作经历

### 杭州雪米信息科技 （2017年11月 ~ 当前）

#### 电梯维保系统

- 关键字：element-ui 、vue-cli、vue-router、vuex
- 描述：项目主要解决维保公司、保险公司、物业单位三方对于电梯维修分工合作以及责任分配问题，采用组件化思想搭建整个项目，从而使组件高度复用，代码简洁

### 杭州客牛科技有限公司 （2017年4月 - 2017年11月 ）

#### 项目开发与重构

- 关键字：webpack多页面 、vue、微信JS-SDK、jQuery、weui
- 描述：封装面向用户端的逻辑处理，处理用户分享，支付，关联报名与帮忙者等交互逻辑，将背景音乐，报名流程，编辑页，详情页，分享等模块化

## 技能清单


- 精通W3C标准及规范，掌握HTML5语义化标签如canvas、nav及WebStorage
- 跨分辨率,跨浏览器(传统Pc端+移动端)，会使用REM、vw/vh、媒体查询等100%还原ui设计稿；
- 熟悉CSS3动画、过渡、弹性盒子布局、媒体查询等响应式设计常用技术
- 熟悉 jQuery以及其插件的使用，熟悉mint-ui、Element-ui等ui框架
- 有Vue长期开发经历，理解组件、props及生命周期等，有使用vue-cli，vue-router开发经历
- 有小程序产品开发经验，熟悉开发流程、规则、API等
- 熟悉前后端分离工作环境,熟练使用ajax 以及json数据解析处理前后端分离;
- 熟练使用ECMAScript6完成工作开发，有使用Webpack打包项目的经验
- 熟练使用git以及svn工具协同开发，掌握sass或less完成的css预处理。理解MVC、MVVM思想，掌握HTTP基础
`
      },
      // 代码编辑开始处
      codeReady: function () {
        return `/*
* hello,欢迎您阅读我的个人简历
*/
/*
* 在我们开始之前我们先给所有样式变化加个渐变，观看效果更佳
* */
* {
  transition: all 0.3s;
}
/* 先加个背景色*/
body{
  background: rgb(90,97,89);
}

/* 给代码加个边框*/
#codeEdit {
    width: calc(100% - 32px);
    border: 1px solid #CFD8DC;
    background: #CFD8DC;
    margin: 16px;
    padding: 16px;
    overflow: auto;
}

/* 为了更美观，我们选择prism.js以及以下代码使代码高亮 */
.token.comment, .token.punctuation {
    color: #757575;
}

.token.selector {
    color: #007400;
}

.token.property {
    color: #cf1f1f;
}

/* 再来点动画吧,给正在编辑的区域加点特效 */
.breathe {
    animation: breathe 3s infinite linear;
}
/* 代码编辑框太大了，还要写简历呢 */
#codeEdit {
    width: 30%;
}

/* 准备一个白板留给简历 */
#paper {
    flex-grow: 1;
    background: #fdfdfd;
    margin: 16px;
    overflow: auto;
}
/* 接下来我要编辑我的简历了，
* 请看右侧，我先将简历内容显示一下*/`
      },
      markdownNotify: function () {
        return `
        
      
/* 
* 接下来我要使用一个优秀的库 marked.js
* 来使我的简历变成一篇 Markdown
* (https://github.com/markedjs/marked)
*/`
      },
      beautifulResume: function () {
        return `
/* 调整我的简历，让它变得再好看一点 */
#paper {
  padding: 0 32px;
  font-size: 14px;
}
#paper a {
  color: #455A64;
}
#paper ul {
  padding-left: 20px;
}
/* 让每个模块上下间隔明显一点 */
#paper > div {
  margin: 28px 0;
}

/* 接下来是精细的调整 */

/* 首先，调整我的“基础信息”板块 */
#paper h1 {
  font-size: 22px;
  margin-bottom: 10px;
}
#resumeName {
  text-align: center;
}
#information > ul ul {
  margin: 4px 0;
}
#information li, #works li, #education li {
  margin-bottom: 4px;
}


/* 然后是详细介绍模块 */
#paper h2 {
  font-size: 18px;
  border-bottom: 1px solid #666;
  padding-bottom: 6px;
  margin-bottom: 6px;
}
#paper h3 {
  display: block;
  font-size: 16px;
  margin: 6px 0;
}
#paper h4 {
  display: block;
  font-size: 14px;
  margin: 3px 0;
}
#skills > ul ul {
  margin: 4px 0;
}
#skills li, #works li, #education li {
  margin-bottom: 4px;
}
/* 
 * 好啦，我的简历出来了~
 * 期待这张简历背后的人可以出现在你的面前
 * 
 *                     *^_^*
 *          —— 贺会强 2018/3
 */
`
      }

    },
    _init() {
      const arr = [
        this.writeCode.bind(this, this.text.codeReady(), ''),
        this.writeResume.bind(this, this.text.resume()),
        this.writeCode.bind(this, this.text.markdownNotify(), this.text.codeReady()),
        this.writeResume.bind(this, this.text.resume(), marked),
        this.writeCode.bind(this, this.text.beautifulResume(), this.text.codeReady() + this.text.markdownNotify()),

      ]
      this.queue(arr).then(() => {
        console.log('大功告成')
      })

    },
    codeEdit: $('#codeEdit'),
    codeStyle: $('#codeStyle'),
    paper: $('#paper'),
    runWriteCodeNum: 0,
    /* 因为是使用innerHtml 进行全局替换，
     * 所以需要加上之前代码，同时也需要将现在需要显示代码展现*/
    writeCode: (function () {
      return function (codeLittle, code = '') {
        this.runWriteCodeNum++
        if (this.runWriteCodeNum > 1) {
          // 编辑左侧时加入呼吸灯
          this.codeEdit.addClass('breathe').siblings().removeClass('breathe')
        }
        console.log(`第${this.runWriteCodeNum}次`)
        return new Promise((resolve) => {
          let i = 1;
          const length = codeLittle.length;
          let time = setInterval(() => {
            // 使用Prism 让span标签区别代码{、类名、属性名、属性详情
            this.codeEdit.html(Prism.highlight(code + codeLittle.substr(0, i), Prism.languages.css, 'css'))
            this.codeStyle.html(code + codeLittle.substr(0, i))
            this.codeEdit.scrollTop(this.codeEdit[0].scrollHeight)
            i = i + 1
            if (i > length) {
              window.clearInterval(time)
              resolve && resolve()
            }
          }, 20)
        })
      }
    })(),
    /* 显示简历 */
    writeResume: (function () {
      return function (resume, markdown) {
        return new Promise((resolve) => {
          if (markdown) {
            this.paper.html(markdown(resume))
            $('#paper').prepend('<div id="resumeName"></div>','<div id="information"></div>', '<div id="works"></div>', '<div id="skills"></div>')
            console.log($('h2:contains("技能")'), $('p').first(), $('p').first(), $('p').last(), $('ul').first(), $('ul').last(), $('#paper').children().not($('div')))
            $('#resumeName').append($('h1').first(), $('p').first())
            $('#information').append($('h2:contains("个人")'), $('ul').first())
            $('#works').append($('h2:contains("项目")'), $('#paper').children().not($('div')))
            $('#skills').append($('h2:contains("技能")'), $('ul').last())
            resolve()
          } else {
            // 出现简历之前先把呼吸灯安装上
            this.paper.addClass('breathe').siblings().removeClass('breathe')
            let i = 1;
            const len = resume.length
            let time = setInterval(() => {
              this.paper.html(resume.substr(0, i))
              this.paper.scrollTop(this.paper[0].scrollHeight)
              i += 1
              if (i > len) {
                clearInterval(time)
                resolve && resolve()
              }
            }, 0)
          }
        })
      }
    })(),
    /* 调整简历样式 */
    showResumeStyle: (function () {
      return function () {
        return new Promise(() => {

        })
      }
    })(),
    // 将几个异步函数连成队列执行
    async queue(arr) {
      let res = Promise.resolve()
      for (let promise of arr) {
        // 同步等待下一步执行,promise 函数运行的返回值为传入 resolve的参数
        await promise()
      }
      return res
    }
  }
  page._init()
})
