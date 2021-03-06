=== Gutenberg ===
Contributors: matveb, joen, karmatosed
Requires at least: 4.8
Tested up to: 4.9
Stable tag: 1.8.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A new editing experience for WordPress is in the works, with the goal of making it easier than ever to make your words, pictures, and layout look just right. This is the beta plugin for the project.

== Description ==

The goal of the block editor is to make adding rich content to WordPress simple and enjoyable.

<strong>This is beta software.</strong>

The new post and page building experience will make writing rich posts effortless, making it easy to do what today might take shortcodes, custom HTML, or "mystery meat" embed discovery.

WordPress already supports a large amount of "blocks", but doesn't surface them very well, nor does it give them much in the way of layout options. By embracing the blocky nature of rich post content, we will surface the blocks that already exist, as well as provide more advanced layout options for each of them. This will allow you to easily compose beautiful posts like <a href="http://moc.co/sandbox/example-post/">this example</a>.

Gutenberg is built by many contributors and volunteers. You can see the full list of contributors in <a href="https://github.com/WordPress/gutenberg/blob/master/CONTRIBUTORS.md">the GitHub CONTRIBUTORS.md file</a> which we are continuously updating. You can follow along on <a href="https://github.com/WordPress/gutenberg">github.com/WordPress/gutenberg</a> and on the <a href="https://make.wordpress.org/core/tag/editor/">#editor tag on the make.wordpress.org blog</a>.

== Frequently Asked Questions ==

= How can I send feedback or get help with a bug? =

We'd love to hear your bug reports, feature suggestions and any other feedback! Please head over to <a href="https://github.com/WordPress/gutenberg/issues">the GitHub issues page</a> to search for existing issues or open a new one. While we'll try to triage issues reported here on the plugin forum, you'll get a faster response (and reduce duplication of effort) by keeping everything centralized in the GitHub repository.

= How can I contribute? =

The more the merrier! To get started, check out our <a href="https://github.com/WordPress/gutenberg/blob/master/CONTRIBUTING.md">guide for contributors</a>.

== Changelog ==

= 1.8.1 =

* Add ability to switch published post back to draft.
* Fix issue with when changing column count in "text columns" block.
* Prioritize common items in the autocomplete inserter.
* Avoid changing publish/update button label when saving draft.
* Add bottom padding to the editor container to improve experience of writing long posts.
* Adjust the Classic block toolbar so it's doesn't jump.
* Colorize the little arrow on the left of the admin menu to white to match body content.
* Abort focus update when editor is not yet initialized.
* Update autocomplete suggestions colors to have a sufficient color contrast ratio.

= 1.8.0 =

* Introduce block-templates as a list of blocks specification. Allows a custom post type to define a pre-configured set of blocks to be render upon creation of a new item.
* New tools menu design, preparing the way for more extensibility options.
* Block API change: use simpler JS object notation for declaring attribute sources.
* Add function to allow filtering allowed block types.
* Show popovers full screen on mobile, improving several mobile interactions.
* Began work on publishing flow improvements with an indication of publishing (or updating a published post) action by introducing a button state and label updates.
* Made docked-toolbar the default after different rounds of feedback and testing. Both options are still present.
* Provide mechanism for plugin authors to fallback to classic editor when registering meta-boxes. Also includes the ability to disable a specific meta-box in the context of Gutenberg alone.
* Updated color pickers with color indications and collapsible panels.
* Update icon and tooltip for table of contents menu.
* Added contrast checker for paragraph color options.
* Improve pasting plaintext and shortcode data.
* Convert unknown shortcode into shortcode block when pasting.
* Updated notices design and positioning.
* Move the URL handler when pasting to the raw handler mechanism.
* Define custom classNames support for blocks using the new extensibility hooks with opt-out behaviour.
* Add reusable blocks state effects.
* Remove sibling inserter from inside multi-selection blocks.
* Image block alt text enhancements.
* Increase minimum width and height of resized images.
* Allow using escape key to deselect a multi-selection.
* Preserve settings when rebooting from crash.
* Improve structure of store persist mechanism.
* Extract reusable BlockList component to allow nesting compositions.
* Extract BlockToolbar, BlockMover, BlockSwitcher, PostTitle, WritingFlow, TableOfContents, Undo/Redo Buttons, MultiBlockSwitcher, PostPublishWithDropdown, KeyboardShortcuts, DocumentOutlineCheck, PostTrashCheck, Notices,  as reusable components.
* Consolidate block naming requirements.
* Avoid persisting sidebar state on mobile devices.
* Ensure backwards compatibility to matchers syntax.
* Show untitled posts as (no title) in url auto-complete.
* Extract fixedToolbar as a prop of BlockList.
* Restore insertion point blue line.
* Display outline tree even if only one heading is used.
* Allow media upload button to specify a custom title (and fix grammar issue).
* Fix issue with block mover showing on top of url input.
* Fix case where tooltips would get stuck on buttons.
* Fix transformations between quote and list blocks.
* Fix issue with converting empty classic text to multiple blocks.
* Fix issue with audio block not updating the toolbar area.
* Fix contrast issues in button block.
* Fix change detection to maintain multiple instances of state.
* Fix text columns focus style.
* Fix embed category example in docs.
* Fix button link modal not closing.
* Fix styling issue with sibling inserter.
* Fix alignment of block toolbar in wide and full-width.
* Fix issue when inserting image with empty caption.
* Fix issue with sibling inserter not appearing in IE11.
* Fix issue when inserting pullquotes.
* Fix horizontal scrollbar when floating images to the left.
* Fix alignment issue with embed videos.
* Drop withContext optional mapSettingsToProps and fix issue when inserting new image.
* Require @wordpress import path for application entry points.
* Resolve errors in IE11 when using the inserter.
* Added tests for Notice and UrlInput components.
* Added tests for DefaultBlockAppender.
* Log debugging messages for invalid blocks.
* Reduce build size significantly by fixing import statements.
* Update re-resizeable dependency.
* Initial document page for extensibility purposes.
* Added documentation for Editable component.
* Move all components related to the specific post-edit page into its own folder.
* Introduce snapshots for testing.

= 1.7.0 =

* Add toggle to switch between top-level toolbar and toolbars attached to each block. We have gotten great feedback on the benefits of both approaches and want to expand testing of each.
* Ability to transform multiple-selected blocks at once — multiple images into a gallery, multiple paragraphs into lists.
* Add @-mention autocomplete for users in a site.
* Add data layer for reusable blocks and wp_blocks post type name.
* Allow pasting standalone images and uploading them (also supports pasting base64 encoded images).
* Allow block nesting from a parser point of view. This is the foundation for handling nested blocks in the UI.
* Full design update to focus styles around the UI.
* Block Extensibility (Hooks): filters may inspect and mutate block settings before the block is registered using hooks available at wp.blocks.addFilter. Testing with internal functionality first.
* Moved docs to https://wordpress.org/gutenberg/handbook/
* Refactor "changed post" functionality into higher order component and fix issue with wrongly reporting unsaved changes.
* Refactor meta-boxes to render inline, without iframes.
* Disable auto-p for block based posts, solving various issues around conflicting paragraph structures, freeform content, and text blocks.
* Placed "table of contents" button in the header area and disable when there are no blocks in the content.
* Redesigned the button block with inline URL field.
* Improve performance by refactoring block-multi-controls out of VisualEditorBlock.
* Replace react-slot-fill with our own first-party implementation. Part one, and part two for better handling of event bubbling within portals.
* Improve autocomplete behaviour by using focus outside utility. This solves an issue with selecting items on mobile.
* Capture and recover from application errors, offering the option to copy the existing contents to the clipboard.
* Expose editor reusable components. These will allow editor variations to be constructed with more ease.
* Add polyfill for permalink_structure option to wp-json. (Corresponding trac ticket.) Several REST API compat issues are going to be addressed like this. This allows Gutenberg to implement permalink editing.
* Unslash post content before parsing during save, fixing bugs with block attributes.
* Keyboard navigation overhaul of the inserter with accessibility improvements (accessing tabs, etc).
* Add paragraph count to table of contents element.
* General Navigable family of components.
* Add contrast checker message when color combinations are hard to read.
* Add "no posts found" message to latest posts block.
* Improve color highlight selection and browser consistency.
* Add aria-expanded attribute to settings button.
* Add loading message to preview window.
* Extract PostFeaturedImage, PostLastRevision, PostComments, PostTaxonomies, PageAttributes, PostTextEditor, BlockInspector, into reusable modules.
* Collapse advanced block controls by default.
* Update max number of columns when removing an image from a gallery.
* Prevent the post schedule component from having invalid dates.
* Make sure the inspector for a gallery block is shown when it has just one image.
* Accessibility improvements for inline autocomplete components.
* Update caption color for contrast.
* Update visual display of the "remove x" button on gallery-items.
* Improve classic block toolbar display and behaviour.
* Dismiss tooltip when clicking a button or when wrapper node becomes disabled.
* Restore block movers on floated items.
* Add spacing around date and label.
* Adjust raw handler "mode" option for readability.
* Improve e2e testing performance.
* Add fixture for undelimited freeform block.
* Hold jQuery ready only when there are metaboxes and ignore advanced ones.
* Make sure image size values are integers.
* Fix floated gallery styles in the front-end.
* Fix issue with image block not loading properly.
* Fix issue with missing function in IE11.
* Fix transformation of empty images into gallery and back.
* Fix overflow issues on mobile.
* Fix accidental block hover on iOS.
* Fix toolbar state issue with slot-fill utility.
* Fix case of too many undo levels building up.
* Fix stylesheet load ordering issue.
* Prevent input events from URLInput from being captured by Editable.
* Force onChange to be updated with TinyMCE content before merge.
* Polish heading toolbar buttons.
* Remove image resizing on mobile.
* Remove findDOMNode usage from Autocomplete component.
* Rename references of rawContent as innerHTML.
* Add tests and handle empty fills in slot-fill.
* Add tests for block mover.
* Add multi-select e2e test and fix issue with escape key.
* Bump node version to active LTS.
* Update TinyMCE to 4.7.2, fixing several bugs like toolbar flickering, visible placeholders when there is text, navigation breaks when encountering format boundaries, typing in FF after starting a bullet-list.

= 1.6.1 =

* Handle pasting shortcodes and converting to blocks.
* Show loading message when opening preview.
* Fix inline pasting (auto-link feature).
* Fix undoing multi-selection delete operation.
* Remove focus state after a selection is finished during multi-select.
* Remove the "command" shortcut to navigate to the editor toolbar.

= 1.6.0 =

* Move the block toolbar to the editor's top header. This experiment seeks to reduce the presence of UI obscuring content.
* Alternate style for block boundaries and multi-selection. Also engages "edit" mode when using arrow keys (hides UI).
* Complete rework of arrow keys navigation between blocks—faster, clearer, and respects caret position while traversing text blocks.
* Added keyboard shortcuts to navigate regions.
* Implement multi-selection mode using just arrow with shift keys and support horizontal arrows.
* Suggest a post format for additional blocks (embeds, gallery, audio, video) and expand on the heuristics to include case of one format-block at the top plus a paragraph of text below as valid.
* Allow converting a classic block (post) into several Gutenblocks.
* Several performance improvements 🎉
* * Avoid re-rendering all blocks on selection changes.
* * Add memoization for multi-select selectors.
* * Rework implementation of blockRef to avoid render cascade from block list.
* * Use flatMap when allocating the block list for rendering.
* * Reorganize logic to determine when a post can be saved to be less expensive.
* Refactor handling of revisions to avoid loading them up-front, significantly reducing load time on long posts with many revisions.
* Further memoization on selectors based on specific state keys.
* Render meta-boxes as part of the main column, not as a collapsible box.
* Improve handling of undo action stack by resetting only on setup. This makes undo a lot more usable in general.
* Changes to block inserter design positioning tabs at the top. (1.5.1)
* Remove multi-select buffer zone and throttle delay for a faster response.
* API for handling custom formats/tokens in Editable.
* Improve withApiData component to be able to serve cached data (if available) during an initial render.
* Show block toolbar in HTML mode for mobile.
* Update Shortcode block to use a textarea instead of single line input.
* Increase width of invalid block message.
* Avoid redirecting to Gutenberg when saving on classic editor. (1.5.2)
* Don't show "edit as HTML" for the Code and Shortcode blocks.
* Refactor notices state reducer as array optimizing performance.
* Disable front-end styles for basic quote block.
* Reorganize the meta-boxes components for code clarity.
* Extract reusable PostSticky, PostFormat, PostPendingStatus, PostAuthor, PostTrash, PostExcerpt components.
* Resolve issue with having to tab twice on the toolbar due to focusReturn utility interfering with button tooltips.
* Reset min-width of Tooltip component.
* Avoid function instantiation in render of WritingFlow component.
* Add the gutenberg_can_edit_post_type filter for plugins to add or remove support for custom post types.
* Update header toolbar keyboard navigation to include undo and redo buttons.
* Don't show the classic editor dropdown on unsupported post types.
* Drop resizable-box in favor of re-resizable to use in the image block resize handlers.
* Correct placement of link-dialog after moving toolbar to the top.
* Adjust revisions logic to link to latest entry.
* Allow editable to accept aria attributes.
* Add generic focus effect to popovers.
* Remove unused focus prop from Button component.
* Remove core namespace from demo content.
* Enable iOS smooth scrolling within scroll containers.
* Make sure link menu appears above sibling inserter.
* Improve layout paneling for short-height viewports.
* Fix problem with multi-select not working again after a group of blocks has been moved.
* Fix problem with deleting a block in HTML mode.
* Fix issue with keyboard navigation entering textareas (non contentEditable) and losing caret position.
* Fix issue where clicking on an item within autocomplete would dismiss the popover and not select anything.
* Fix visual issue with the document info popover. (1.5.2)
* Fix bug with deleting featured image on a post.
* Fix error with removing a block placeholder.
* Fix problem with FF and meta-boxes.
* Fix issue with Classic Text description showing all the time.
* Fix issue with the color picker width.
* Fix quick inserter display of custom block icons.
* Fix missing node check when blurring a paragraph block.
* Warn about misuses of z-index mappings.
* Make use of the "build stages" feature in the travis config file.
* Upgrade ESLint dependencies.
* Move test configuration files to test/unit.
* Add easy local environment setup and Cypress e2e tests.

= 1.5.2 =

* Add the `gutenberg_can_edit_post_type` filter for plugins to add or remove support for custom post types.
* Fix Classic Editor redirecting to Gutenberg when saving a post.
* Fix Classic Editor dropdown showing on post types that don't support Gutenberg.
* Fix Classic Editor dropdown hiding behind notices.
* Fix an issue with collapsing popover content.

= 1.5.1 =

* New design for the inserter with tabs at the top and more space for text.
* Fix problem with Firefox and the meta-boxes resize script.
* Fix issue with Classic Text description showing without focus.

= 1.5.0 =

* Set Gutenberg as the default editor (still allow creating new posts in Classic Editor).
* Add metabox support—this is an initial pass at supporting existing meta-boxes without intervention.
* Display inserter button between blocks.
* Improve block navigation performance.
* Hide core namespace in comment serialization. wp:core/gallery becomes wp:gallery.
* Implement a dropdown for Publish flow.
* Allow multiselect to work on shift-click.
* Insert new block from title on enter.
* Use a dropdown for the block menu (settings, delete, edit as HTML).
* Add expandable panel for post visibility.
* Add expandable panel for post scheduling.
* Implement more inline formatting boundaries.
* Better clearing of block selection.
* Show placeholder hint for slash autocomplete on new text blocks.
* Remove multi-selection header in favor of default block controls (mover and menu).
* Allow blocks to disable HTML edit mode.
* Adjust transition and delay of inserter between blocks.
* Added text color option for button block.
* Hide extended settings if sidebar is closed.
* New embed icons.
* Move the store initialization to a dedicated component.
* Improve scroll position of scrollable elements.
* Drop undefined blocks from recent blocks.
* Update HTML block description.
* Update embed block description.
* Add description for classic block.
* PHPCS-specific improvements.
* Add a default block icon.
* Adjust line height of classic text to match paragraph blocks.
* Adjust filter order in classic block so plugins that extend it can work properly.
* Set textarea value as prop and not children.
* Fix mobile issues with block setting menu.
* Fix undefined colors warning.
* Fix broken upload button on image placeholder.
* Fix post edit URL when saving a post/page/CPT.
* Fix conflict with new TinyMCE version and heading blocks.
* Tweak block sibling element for better target surface.
* Avoid loading Gutenberg assets on non-Gutenberg pages.
* Adjust Jest configuration.
* Document supportAnchor in block API.
* Updated TinyMCE to latest.
* Document block name usage in serialization and add example of serialized block.
* Updated FAQ section.
* Upgrade React and Enzyme dependencies.

= 1.4.0 =

* Redesigned the header area of the editor for clarity—groups content actions in the left, and post action in the right.
* Initial REST API infrastructure for reusable global blocks.
* Group block settings (delete, inspector, edit HTML) on an ellipsis button.
* Added new reusable Dropdown component.
* Show frequently used blocks in the inserter shortcuts (at the bottom of the post).
* Offer option for the button block to clear content.
* Refactor block toolbar component in preparation for some iterations (docked toolbar, for example).
* Allow partial URLs in link input.
* Avoid using state for tracking arrow key navigation in WritingFlow to prevent re-renders.
* Improve mobile header after design cleanup.
* Add focusReturn for Dropdown component.
* Updated Audio block markup to use figure element.
* Removed transition on multi-select affecting the perception of speed of the interaction.
* Show Gallery block description even if there are no images.
* Persist custom class names.
* Merge initialization actions into a single action.
* Fix scroll position when reordering blocks.
* Fix case where the responsive treatment of the header area was hiding valuable actions.
* Fix focus styles on the inserter.
* Fix submenu visibility issue for certain users.
* Cleanup no longer used code.
* Document useOnce block API feature.

= 1.3.0 =

* Add an opacity range slider to the cover image block.
* Offer the option to convert a single block to an HTML block when conflicting content is detected.
* Persist recently used blocks through sessions.
* Added support for pasting plain text markdown content and converting to blocks.
* The block inspector groups features and settings in expandable panels.
* Accessibility improvements to the color palette component.
* Added a “feedback” link in the Gutenberg side menu.
* Use expandable panels for advanced block features (class name and anchor).
* Removed touch listeners from multi select.
* Added block descriptions to blocks that didn’t have them.
* Allow stored values to be updated with new defaults.
* Refactor image block to use withApiData and fix issues with .tiff images.
* Clean up non inline elements when pasting inline content.
* Remove unused code in BlockList component.
* Added “transform into” text to block switcher.
* Fixed sidebar overflow causing extra scrollbars.
* Fixed multi-select inside new scroll container.
* Fixed image block error with .tiff image.
* Fixed the content overflowing outside the verse block container.
* Fixed issues with sticky quick toolbar position.
* Fixed hitting enter when a block is selected creating a default block after selected block.
* Fixed teaser markup in demo content.
* Clean working directory before packaging plugin.
* Updated Webpack dependencies.
* Updated Jest and React.

= 1.2.1 =

* Fix issue where invalid block resolution options were not clickable.

= 1.2.0 =

* Resolve block conflicts when editing a block post in the classic editor. Gutenberg's strict content validation has helped identify formatting incompatibilities, and continued improvements are planned for future releases.
* Add word and block count to table of contents.
* Add support for meta attributes (custom fields) in block attributes. This allows block authors to specify attributes to live outside of post_content entirely.
* Allow Gutenberg to be the default editor for posts with blocks and add links to classic editor.
* Accessibility: add landmark regions.
* Add metabox placeholder shell.
* Add crash recovery for blocks which error while saving.
* Hide Sidebar panels if the user doesn't have the right capabilities.
* Refactor PostTaxonomies to use 'withApiData'.
* Create 'withApiData' higher order component for managing API data.
* Make casing consistent.
* Allow toolbar wrapper to be clicked through.
* Support and bootstrap server-registered block attribute schemas.
* Shift focus into popover when opened.
* Reuse the tabbable utility to retrieve the tabbables elements in WritingFlow.
* Change placeholder text on button.
* Persist the sate of the sidebar across refresh.
* Use a small multiselect buffer zone, improving multiple block selection.
* Close popover by escape keypress.
* Improve dropzone contrast ratio.
* Improve search message to add context.
* Improve string extraction for localized strings.
* Fixed z-index issue of gallery image inline menu.
* Fixed image block resizing to set the figure wrapper.
* Fixed column widths in gallery block.
* Fixed parsing in do_blocks() and rendering of blocks on frontend in the_content.
* Fixed position of upload svg on mobile.

= 1.1.0 =

* Add blocks "slash" autocomplete—shortcut to continue adding new block without leaving the keyboard.
* Add ability to remove an image from a gallery from within the block (selecting image).
* Add option to open a created link in a new window.
* Support and bootstrap server-registered block attribute schemas.
* Improve accessibility of add-new-category form.
* Documentation gets an updated design and content improvements.
* Adjust column width calculation in gallery block to properly respect column count.
* Move pending review control together with sticky toggle at the bottom.
* Add caption styling for video block.
* Allow removing a "classic text" block with backspaces.
* Allow Button block to show placeholder text.
* Drop the deprecated button-secondary class name.
* Fix link dialog not showing in Safari when caret is in the middle of the word.
* Fix adding new categories and position newly added term at the top.
* Fix the resetting of drop-zone states after dropping a file.
* Fix embed saving "undefined" text when URL is not set.
* Fix placeholder styling on Text when background color is set.
* Update Composer + PHPCS.
* Rename default block handlers.
* Update code syntax tabs in docutron.
* Link to plugin download and github repo from docutron.
* Added block API document.
* Add "Edit and Save" document.

= 1.0.0 =
* Restored keyboard navigation with more robust implementation, addressing previous browser issues.
* Added drag and drop for media with pointer to create new blocks.
* Merged paragraph and cover text blocks (includes the colors and font size options).
* Reworked color palette picker with a "clear" and a "custom color" option.
* Further improvements to inline pasting and fixing errant empty blocks.
* Added thumbnail size selector to image blocks.
* Added support for url input and align and edit buttons to audio block.
* Persist the state of the sidebar across page refresh.
* Persist state of sidebar panels on page refresh.
* Persist editor mode on page refresh.
* New withAPIData higher-order component for making it easier to manage data needs.
* Preserve unknown block and remove "freeform" comment delimiters (unrecognized HTML is handled without comment delimiters).
* Show "add new term" in hierarchical taxonomies (including categories).
* Show tooltip only after mouseover delay.
* Show post formats only if the post type supports them.
* Added align and edit buttons to video block.
* Preload data in withApiData to improve perceived performance.
* Improve accessibility of sidebar modes.
* Allow changing cover-image settings before uploading an image.
* Improve validation leniency around non-meaningful differences.
* Take into account capabilities for publishing action.
* Update author selector to show only users capable of authoring posts.
* Normalize pasted blockquote contents.
* Refactored featured image, page attributes to use withApiData
* Added a fix to avoid cloning nodes by passing pasted HTML string.
* Added a fix to avoid re-encoding on encoded posts.
* Fixed resetting the focus config when block already selected.
* Allowing adding of plain text after insert link at the end of a paragraph.
* Update to latest TinyMCE version.
* Show only users capable of authoring posts.
* Add submit for review to publish for contributor.
* Delete or backspace in an empty "classic text" block now removes it.
* Check for type in block transformations logic.
* Fixed drop-down menu issue on classic text.
* Added filter to allow post types to disable "edit in gutenberg" links.
* Made UrlInput and UrlInputButton available as reusable components.
* Use wordpress/a11y package instead of global.
* Added npm5 package-lock.
* We welcome all your feedback and contributions on the project repository, or ping us in #core-editor. Follow the "gutenberg" tag for past updates.

= 0.9.0 =
* Added ability to change font-size in cover text using slider and number input.
* Added support for custom anchors (ids) on blocks, allowing to link directly to a section of the post.
* Updated pull-quote design.
* Created custom color palette component with "clear" option and "custom color" option. (And better markup and accessibility.)
* Improve pasting: recognizing more elements, adding tests, stripping non-semantic markup, etc.
* Improve gallery visual design and fix cropping in Safari.
* Allow selecting a heading block from the table-of-contents panel directly.
* Make toolbar slide horizontally for mobile.
* Improve range-input control with a number input.
* Fix pasting problems (handling of block attributes).
* More stripping of unhandled elements during paste.
* Show post format selector only for posts.
* Display nicer URLs when editing links.
* More compact save indicator.
* Disabled arrow key navigation between blocks as we refine implementation.
* Removed blank target from "view post" in notices.
* Fix empty links still rendering ont he front-end.
* Fix shadow on inline toolbars.
* Fix problem with inserting pull-quotes.
* Fix drag and drop on image block.
* Removed warning when publishing.
* Don't provide version for vendor scripts.
* Clean category code in block registration.
* Added history and resources docs.

= 0.8.0 =
* New Categories Block (based on existing widget).
* New Text Columns Block (initial exploration of text-only multiple columns).
* New Video Block.
* New Shortcode Block.
* New Audio Block.
* Added resizing handlers to Image Block.
* Added direct image upload button to Image Block and Gallery Block.
* Give option to transform a block to Classic when it encounters problems.
* Give option to Overwrite changes on a block detected as invalid.
* Added "link to" option in galleries.
* Added support for custom taxonomies.
* Added post formats selector to post settings.
* Added keywords support (aliases) to various blocks to improve search discovery.
* Significant improvements to the way attributes are specified in the Block API and its clarity (handles defaults and types).
* Added Tooltip component displaying aria-labels from buttons.
* Removed stats tracking code.
* Updated design document.
* Capture and recover from block rendering runtime errors.
* Handle enter when focusing on outer boundary of a block.
* Reduce galleries json attributes data to a minimum.
* Added caption styles to the front-end for images and embeds.
* Added missing front-end alignment classes for table and cover-text blocks.
* Only reset blocks on initial load to prevent state fluctuations.
* Improve calculation of dirty state by making a diff against saved post.
* Improve visual weight of toolbar by reducing its silhouette.
* Improve rendering of galleries on the front-end.
* Improve Cover Image placeholder visual presentation.
* Improve front-end display of quotes.
* Improve responsive design of galleries on the front-end.
* Allow previewing new posts that are yet to be saved.
* Reset scrolling position within inserter when switching tabs.
* Refactor popover to render at root of document.
* Refactor withFocusReturn to handle accessibility better in more contexts.
* Prevent overlap between multi-selection and within-block selection.
* Clear save notices when triggering a new save.
* Disable "preview" button if post is not saveable.
* Renamed blocks.query to blocks.source for clarity and updated documentation.
* Rearrange block stylesheets to reflect display and editor styles.
* Use @wordpress dependencies consistently.
* Added validation checks for specifying a block's category.
* Fix problems with quote initialization and list transformation.
* Fix issue where Cover Image was being considered invalid after edits.
* Fix errors in editable coming from Table block commands.
* Fix error in latest posts block when date is not set for a post.
* Fix issue with active color in ColorPalette component.
* Prevent class=false serialization issue in covert-text.
* Treat range control value as numeric.
* Added warning when using Editable and passing non-array values.
* Show block switcher above link input.
* Updated rememo dependency.
* Start consuming from separate @wordpress dependencies.
* Fix problem with inserting new galleries.
* Fix issue with embeds and missing captions.
* Added outreach section to docs.

= 0.7.1 =
* Address problem with the freeform block and Jetpack's contact form.

= 0.7.0 =
* Hide placeholders on focus—reduces visual distractions while writing.
* Add PostAuthor dropdown to the UI.
* Add theme support for customized color palettes and a shared component (applies to cover text and button blocks).
* Add theme support for wide images.
* Report on missing headings in the document outline feature.
* Update block validation to make it less prone to over-eagerness with trivial changes (like whitespace and new lines).
* Attempt to create an embed block automatically when pasting URL on a single line.
* Save post before previewing.
* Improve operations with "lists", enter on empty item creates new paragraph block, handling backspace, etc.
* Don't serialize attributes that match default attributes.
* Order link suggestions by relevance.
* Order embeds for easier discoverability.
* Added "keywords" property for searching blocks with aliases.
* Added responsive styles for Table block in the front end.
* Set default list type to be unordered list.
* Improve accessibility of UrlInput component.
* Improve accessibility and keyboard interaction of DropdownMenu.
* Improve Popover component and use for PostVisibility.
* Added higher order component for managing spoken messages.
* Localize schema for WP API, avoiding initialization delay if schema is present.
* Do not expose editor.settings to block authors.
* Do not remove tables on pasting.
* Consolidate block server-side files with client ones in the same directory.
* Removed array of paragraphs structure from text block.
* Trim whitespace when searching for blocks.
* Document, test, and refactor DropdownMenu component.
* Use separate mousetrap instance per component instance.
* Add npm organization scope to WordPress dependencies.
* Expand utilities around fixture regeneration.
* Renamed "Text" to "Paragraph".
* Fix multi-selection "delete" functionality.
* Fix text color inline style.
* Fix issue caused by changes with React build process.
* Fix splitting editable without child nodes.
* Use addQueryArgs in oEmbed proxy url.
* Update dashicons with new icons.
* Clarify enqueuing block assets functions.
* Added code coverage information to docs.
* Document how to create new docs.
* Add example of add_theme_support in docs.
* Added opt-in mechanism for learning what blocks are being added to the content.

= 0.6.0 =
* Split paragraphs on enter—we have been exploring different behaviours here.
* Added grid layout option for latest posts with columns slider control.
* Show internal posts / pages results when creating links.
* Added "Cover Text" block with background, text color, and full-width options.
* Autosaving drafts.
* Added "Read More" block.
* Added color options to the button block.
* Added mechanism for validating and protecting blocks that may have suffered unrecognized edits.
* Add patterns plugin for text formatting shortcuts: create lists by adding * at the beginning of a text line, use # to create headings, and backticks for code.
* Implement initial support for Cmd/Ctrl+Z (undo) and Cmd/Ctrl+Shift+Z (redo).
* Improve pasting experience from outside editors by transforming content before converting to blocks.
* Improve gallery creation flow by opening into "gallery" mode from placeholder.
* Added page attributes with menu order setting.
* Use two distinct icons for quote style variations.
* Created KeyboardShortcuts component to handle keyboard events.
* Add support for custom icons (non dashicons) on blocks.
* Initialize new posts with auto-draft to match behaviour of existing editor.
* Don't display "save" button for published posts.
* Added ability to set a block as "use once" only (example: "read more" block).
* Hide gallery display settings in media modal.
* Simplify "cover image" markup and resolve conflict state in demo.
* Introduce PHP classes for interacting with block types.
* Announce block search results to assistive technologies.
* Reveal "continue writing" shortcuts on focus.
* Update document.title when the post title changes.
* Added focus styles to several elements in the UI.
* Added external-link component to handle links opening in new tabs or windows.
* Improve responsive video on embed previews.
* Improve "speak" messages for tag suggestions.
* Make sure newly created blocks are marked as valid.
* Preserve valid state during transformations.
* Allow tabbing away from table.
* Improve display of focused panel titles.
* Adjust padding and margins across various design elements for consistency and normalization.
* Fix pasting freeform content.
* Fix proper propagation of updated block attributes.
* Fix parsing and serialization of multi-paragraph pullquotes.
* Fix a case where toggling pending preview would consider post as saved.
* Fix positioning of block mover on full-width blocks.
* Fix line height regression in quote styles.
* Fix IE11 with polyfill for fetch method.
* Fix case where blocks are created with isTyping and it never clears.
* Fix block warning display in IE11.
* Polish inspector visual design.
* Prevent unhandled actions from returning new state reference.
* Prevent unintentionally clearing link input value.
* Added focus styles to switch toggle components.
* Avoid navigating outside the editor with arrow keys.
* Add short description to Verse block.
* Initialize demo content only for new demo posts.
* Improve insert link accessibility.
* Improve version compare checks for plugin compatibility.
* Clean up obsolete poststoshowattribute in LatestPosts block.
* Consolidate addQueryArgs usage.
* Add unit tests to inserter.
* Update fixtures with latest modifications and ensure all end in newlines.
* Added codecov for code coverage.
* Clean up JSDoc comments.
* Link to new docs within main readme.

= 0.5.0 =
* New tabs mode for the sidebar to switch between post settings and block inspector.
* Implement recent blocks display.
* Mobile implementation of block mover, settings, and delete actions.
* Search through all tabs on the inserter and hide tabs.
* New documentation app to serve all tutorials, faqs, docs, etc.
* Enable ability to add custom classes to blocks (via inspector).
* Add ability to drag-and-drop on image block placeholders to upload images.
* Add "table of contents" document outline for headings (with empty heading validation).
* Refactor tests to use Jest API.
* New block: Verse (intended for poetry, respecting whitespace).
* Avoid showing UI when typing and starting a new paragraph (text block).
* Display warning message when navigating away from the editor with unsaved changes.
* Use old editor as "freeform".
* Improve PHP parser compatibility with different server configurations ("mbstring" extension and PCRE settings).
* Improve PostVisibility markup and accessibility.
* Add shortcuts to manage indents and levels in List block.
* Add alignment options to latest posts block.
* Add focus styles for quick tags buttons in text mode.
* Add way to report PHP parsing performance.
* Add labels and roles to UrlInput.
* Add ability to set custom placeholders for text and headings as attributes.
* Show error message when trashing action fails.
* Pass content to dynamic block render functions in PHP.
* Fix various z-index issues and clarify reasonings.
* Fix DropdownMenu arrows navigation and add missing aria-label.
* Update sandboxed iframe size calculations.
* Export inspector controls component under wp.blocks.
* Adjust Travis JS builds to improve task allocation.
* Fix warnings during tests.
* Fix caret jumping when switching formatting in Editable.
* Explicitly define prop-types as dependency.
* Update list of supported browsers for consistency with core.

= 0.4.0 =
* Initial FAQ (in progress).
* API for handling pasted content. (Aim is to have specific handling for converting Word, Markdown, Google Docs to native WordPress blocks.)
* Added support for linking to a url on image blocks.
* Navigation between blocks using arrow keys.
* Added alternate Table block with TinyMCE functionality for adding/removing rows/cells, etc. Retired previous one.
* Parse more/noteaser comment tokens from core.
* Re-engineer the approach for rendering embed frames.
* First pass at adding aria-labels to blocks list.
* Setting up Jest for better testing environment.
* Improve performance of server-side parsing.
* Update blocks documentation with latest API functions and clearer examples.
* Use fixed position for notices.
* Make inline mode the default for Editable.
* Add actions for plugins to register frontend and editor assets.
* Supress gallery settings sidebar on media library when editing gallery.
* Validate save and edit render when registering a block.
* Prevent media library modal from opening when loading placeholders.
* Update to sidebar design and behaviour on mobile.
* Improve font-size in inserter and latest posts block.
* Improve rendering of button block in the front end.
* Add aria-label to edit image button.
* Add aria-label to embed input url input.
* Use pointer cursor for tabs in inserter.
* Update design docs with regard to selected/unselected states.
* Improve generation of wp-block-* classes for consistency.
* Select first cell of table block when initializing.
* Fix wide and full alignment on the front-end when images have no caption.
* Fix initial state of freeform block.
* Fix ability to navigate to resource on link viewer.
* Fix clearing floats on inserter.
* Fix loading of images in library.
* Fix auto-focusing on table block being too agressive.
* Clean double reference to pegjs in dependencies.
* Include messages to ease debugging parser.
* Check for exact match for serialized content in parser tests.
* Add allow-presentation to fix issue with sandboxed iframe in Chrome.
* Declare use of classnames module consistently.
* Add translation to embed title.
* Add missing text domains and adjust PHPCS to warn about them.
* Added template for creating new issues including mentions of version number.

= 0.3.0 =
* Added framework for notices and implemented publishing and saving ones.
* Implemented tabs on the inserter.
* Added text and image quick inserts next to inserter icon at the end of the post.
* Generate front-end styles for core blocks and enqueue them.
* Include generated block classname in edit environment.
* Added "edit image" button to image and cover image blocks.
* Added option to visually crop images in galleries for nicer alignment.
* Added option to disable dimming the background in cover images.
* Added buffer for multi-select flows.
* Added option to display date and to configure number of posts in LatestPosts block.
* Added PHP parser based on PEG.js to unify grammars.
* Split block styles for display so they can be loaded on the theme.
* Auto-focusing for inserter search field.
* Added text formatting to CoverImage block.
* Added toggle option for fixed background in CoverImage.
* Switched to store attributes in unescaped JSON format within the comments.
* Added placeholder for all text blocks.
* Added placeholder text for headings, quotes, etc.
* Added BlockDescription component and applied it to several blocks.
* Implemented sandboxing iframe for embeds.
* Include alignment classes on embeds with wrappers.
* Changed the block name declaration for embeds to be "core-embed/name-of-embed".
* Simplified and made more robust the rendering of embeds.
* Different fixes for quote blocks (parsing and transformations).
* Improve display of text within cover image.
* Fixed placeholder positioning in several blocks.
* Fixed parsing of HTML block.
* Fixed toolbar calculations on blocks without toolbars.
* Added heading alignments and levels to inspector.
* Added sticky post setting and toggle.
* Added focus styles to inserter search.
* Add design blueprints and principles to the storybook.
* Enhance FormTokenField with accessibility improvements.
* Load word-count module.
* Updated icons for trash button, and Custom HTML.
* Design tweaks for inserter, placeholders, and responsiveness.
* Improvements to sidebar headings and gallery margins.
* Allow deleting selected blocks with "delete" key.
* Return more than 10 categories/tags in post settings.
* Accessibility improvements with FormToggle.
* Fix media button in gallery placeholder.
* Fix sidebar breadcrumb.
* Fix for block-mover when blocks are floated.
* Fixed inserting Freeform block (now classic text).
* Fixed missing keys on inserter.
* Updated drop-cap class implementation.
* Showcasing full-width cover image in demo content.
* Copy fixes on demo content.
* Hide meta-boxes icons for screen readers.
* Handle null values in link attributes.

= 0.2.0 =
* Include "paste" as default plugin in Editable.
* Extract block alignment controls as a reusable component.
* Added button to delete a block.
* Added button to open block settings in the inspector.
* New block: Custom HTML (to write your own HTML and preview it).
* New block: Cover Image (with text over image support).
* Rename "Freeform" block to "Classic Text".
* Added support for pages and custom post types.
* Improve display of "saving" label while saving.
* Drop usage of controls property in favor of components in render.
* Add ability to select all blocks with ctrl/command+A.
* Automatically generate wrapper class for styling blocks.
* Avoid triggering multi-select on right click.
* Improve target of post previewing.
* Use imports instead of accessing the wp global.
* Add block alignment and proper placeholders to pullquote block.
* Wait for wp.api before loading the editor. (Interim solution.)
* Adding several reusable inspector controls.
* Design improvements to floats, switcher, and headings.
* Add width classes on figure wrapper when using captions in images.
* Add image alt attributes.
* Added html generation for photo type embeds.
* Make sure plugin is run on WP 4.8.
* Update revisions button to only show when there are revisions.
* Parsing fixes on do_blocks.
* Avoid being keyboard trapped on editor content.
* Don't show block toolbars when pressing modifier keys.
* Fix overlapping controls in Button block.
* Fix post-title line height.
* Fix parsing void blocks.
* Fix splitting inline Editable instances with shift+enter.
* Fix transformation between text and list, and quote and list.
* Fix saving new posts by making post-type mandatory.
* Render popovers above all elements.
* Improvements to block deletion using backspace.
* Changing the way block outlines are rendered on hover.
* Updated PHP parser to handle shorthand block syntax, and fix newlines.
* Ability to cancel adding a link from link menu.

= 0.1.0 =
* First release of the plugin.
