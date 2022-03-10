set folder="public"
IF EXIST %folder% (
rd /Q /S %folder%
mkdir %folder%
)
dir %folder%