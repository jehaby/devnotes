http://stackoverflow.com/questions/4987760/how-to-change-size-of-split-screen-emacs-windows

C-x - (shrink-window-if-larger-than-buffer) will shrink a window to fit its content.

C-x + (balance-windows) will make windows the same heights and widths.

C-x ^ (enlarge-window) increases the height by 1 line, or the prefix arg value. A negative arg shrinks the window. e.g. C-- C-1 C-6 C-x ^ shrinks by 16 rows, as does C-u - 1 6 C-x ^.

(There is no default binding for shrink-window.)

C-x } (enlarge-window-horizontally) does likewise, horizontally.
C-x { (shrink-window-horizontally) is also bound by default.
