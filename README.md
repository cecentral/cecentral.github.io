# cecentral.github.io

##Adding New Documentation
---
- Switch to the development branch.
- Create a new markdown file (abc.md).
- Using github-flavored markdown tags, create a documentation page with the desired layout.
- Commit your changes.
- File a pull request to merge the development branch into the jigsaw-master branch.

##Editing Documentation
---
- Follow the steps outlined in **Adding New Documentation**.

##Merging New or Edited Documentation
---
- `git pull` changes to branch: `development` into your local repository.
- File a `pull request` to merge branch: `development` into branch: `jigsaw-master` on github.com.
- Write `merge comments`, approve and merge the `pull request` from the repository on github.com.
- `git pull` changes to branch: `jigsaw-master` into your local repository.
- `gulp && jigsaw build production` in branch: `jigsaw-master` of your local repository (see **Building the Site**).
- `git add build_production && git commit -m "Build for deploy"` in branch `jigsaw-master` of your local repository.
- `git push -u origin jigsaw-master` changes to branch: `jigsaw-master` on github.com.
- `git subtree push --prefix build_production origin master` to push the new build to branch: `master` on github.com.
