# LfPHP FileBrowser Website
***************************

https://filebrowser.linuxforphp.net

<p align="center">
    <img src="https://raw.githubusercontent.com/linuxforphp/filebrowser/master/dist/img/logo.png">
</p>

LfPHP FileBrowser Code Repository: https://github.com/linuxforphp/filebrowser

## FileBrowser - Powerful Multi-User File Manager

FileBrowser is a free, open-source, self-hosted web application for managing files and folders.

You can manage files inside your local repository folder (on your server's hard drive) or connect to other storage adapters (see below).

FileBrowser has multi-user support so you can have admins and other users managing files with different access permissions, roles and home folders.

All basic file operations are supported: copy, move, rename, edit, create, delete, preview, zip, unzip, download, upload.

If allowed, users can download multiple files or folders at once.

File upload supports drag&drop, progress bar, pause and resume. Upload is chunked so you should be able to upload large files regardless of your server configuration.

## Typical use cases
- share a folder with colleagues, your team, friends or family
- give students access to upload their work
- allow workers to upload field data / docs / images
- use as cloud backup
- manage cdn with multiple people
- use as ftp/sftp replacement
- manage s3 or other 3rd party cloud storage
- use to quickly zip and download remote files

## Features & Goals
- Multiple storage adapters (Local, FTP, Amazon S3, Dropbox, DO Spaces, Azure Blob and many others via [Flysystem](https://github.com/thephpleague/flysystem))
- Multiple auth adapters with roles and permissions (Store users in json file, database or use WordPress)
- Multiple session adapters (Native File, Pdo, Redis, MongoDB, Memcached and others via [Symfony](https://github.com/symfony/symfony/tree/4.4/src/Symfony/Component/HttpFoundation/Session/Storage/Handler))
- Single page front-end (built with [Vuejs](https://github.com/vuejs/vue), [Bulma](https://github.com/jgthms/bulma) and [Buefy](https://github.com/buefy/buefy))
- Chunked uploads (built with [Resumable.js](https://github.com/23/resumable.js))
- Zip and bulk download support
- Highly extensible, decoupled and tested code
- No database required

Copyright 2021 [Foreach Code Factory](https://etista.com/).
