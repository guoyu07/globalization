# README

> 采用php gettext实现国际化


## 创建PO文件

    PO的意思是Portable Object， MO是Machine Object， MO文件是PO文件的二进制形态。一般来说，一个PO或MO文件对应于一种语言，如果一个程序要支持多种语言，每一种语言都需要自己 的PO或MO文件


> PO文件的创建不是必须的， 可以自己创建而不用工具， 只要文件格式一致就OK.

### 用xgettext创建PO文件

gettext工具下载地址：[gettext](http://nchc.dl.sourceforge.net/sourceforge/gnuwin32/gettext-0.14.4.exe)
gettext文档地址: [gettext-doc](https://www.gnu.org/savannah-checkouts/gnu/gettext/manual/html_node/xgettext-Invocation.html)

安装好xgettext后， 用命令输出po文件

```bash
 xgettext -d test test.php --from-code=utf-8
```

以上命令会在当前目录生成test.po文件， `-d`指定输出的po文件地址及文件名


#### po文件格式

```
msgid ""
msgstr ""
"Project-Id-Version: \n"
"POT-Creation-Date: 2015-04-24 16:54+0800\n"
"PO-Revision-Date: 2016-06-16 08:50+0000\n"
"Last-Translator: \n"
"Language-Team: \n"
"Language: zh\n"
"MIME-Version: 1.0\n"
"Content-Type: text/plain; charset=UTF-8\n"
"Content-Transfer-Encoding: 8bit\n"
"X-Generator: Poedit 1.7.4\n"
"X-Poedit-Basepath: .\n"
"Plural-Forms: nplurals=1; plural=0;\n"
"X-Poedit-SourceCharset: UTF-8\n"
"X-Poedit-FindPath-0: d:\\controllers\n"

msgid "该项目名已存在或者其他错误，请重试~"
msgstr "この項目名はすでに存在してあるいはその他のエラーがあるので、もう一度試みてください"

msgid ""
msgstr ""

```

## 创建MO文件

下载poedit工具翻译对应的PO文件

Poedit工具下载地址：[Poedit](http://www.poedit.net/download.php )

-------------------

具体请参考官方文档[gun](http://www.gnu.org/software/gettext/manual/gettext.html)

@[godruoyi](http://www.godruoyi.com)