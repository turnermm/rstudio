# rstudio

Using Firefox (or Chrome), it is possible to copy an RStudio page and paste it into ckgedit's editing window, and it can then be saved as a Dokluwiki file. In order to copy the RStudio code blocks without error, it is necessary to remove any internal formatting that occurs inside the RStudio code blocks. This is done by clicking the ckgedit's select-all tool and then clicking the unformat tool. The page and its diagrams will then save correctly. See the following video: 

          https://www.youtube.com/watch?v=_es_hdQvU8c&feature=youtu.be
          
Howewever, the RStudio code will not have highlighting. That is the purpose of this plugin. Before saving, at the top of the RStudio page, enter the following macro: &#126;&#126;R_STUDIO&#126;&#126;. After the page is saved consider removing the macro to prevent unnecessary processing. 
