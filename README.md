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
- Git pull the changes to the development branch to your local version of the repository.
- Write merge comments, approve and merge from the repository on github.com.
- Git pull the changes to jigsaw-master to your local version of the repository.
- Run the build process in your local version of the repository (see **Building the Site**).
- Git push the changes in jigsaw-master to the remote at cecentral.github.io.git.
- Git subtree push the new build to the master branch on the remote at cecentral.github.io.git.
