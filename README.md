#[cecentral.github.io](http://cecentral.github.io)

---

**Repository**: `https://github.com/cecentral/cecentral.github.io.git`

**Subtrees**:

  - master: webroot for cecentral.github.io
  - jigsaw-master: master branch for build process
  - development: staging and testing branch

---

##Adding New Documentation

---

**Add new documentation to the `development` branch at `https://github.com/cecentral/cecentral.github.io`**
- Create a new markdown file ( _abc_.md ).
- Using github-flavored markdown tags, create a documentation page with the desired layout.
- Commit your changes to the `development` branch through the web interface.
- File a pull request to merge the `development` branch into the `jigsaw-master` branch.

---

##Editing Documentation

---

- Follow the steps outlined in **Adding New Documentation**.

---

##Merging New or Edited Documentation

---
**Setup a local repository** : 
  ```
  git clone https://github.com/cecentral/cecentral.github.io.git
  git checkout jigsaw-master
  git checkout development
  ```

**OR** ( _from an existing local repository_ )
  - if `git remote -v` _!=_
  ```
  origin https://github.com/cecentral/cecentral.github.io.git (fetch)
  origin https://github.com/cecentral/cecentral.github.io.git (push)
  ```
  
  - then
  ```
  git remote add <name> https://github.com/cecentral/cecentral.github.io.git
  git checkout -b jigsaw-master
  git pull <name> jigsaw-master
  git checkout -b development
  git pull <name> development
  ```

**Merge the `development` branch into the `jigsaw-master` branch**.

_Approve and merge pull requests from the web interface at https://github.com/cecentral/cecentral.github.io_

- Approve and merge the current pull request: if none exists file one to merge `development into base `master-jigsaw`.
- Write `merge comments` when appropriate.

  ```
  git pull origin jigsaw-master
  gulp && jigsaw build production
  git add build_production && git commit -m "Build for deploy"
  git push -u origin jigsaw-master
  git subtree push --prefix build_production origin master
  ```
---

##[Jigsaw](http://jigsaw.tighten.co/) Documentation

---
- [Installation](http://jigsaw.tighten.co/docs/installation/)
- [Building and Previewing](http://jigsaw.tighten.co/docs/building-and-previewing/)
- [Deploying Your Site](http://jigsaw.tighten.co/docs/deploying-your-site/)

