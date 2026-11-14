from pathlib import Path
from zipfile import ZipFile, ZIP_DEFLATED

root = Path(__file__).resolve().parent.parent
output = root / '_site'
output.mkdir(exist_ok=True)
with ZipFile(output / 'ironwood-php.zip', 'w', ZIP_DEFLATED) as archive:
    for directory in ('public', 'src'):
        for path in sorted((root / directory).rglob('*')):
            if path.is_file():
                archive.write(path, 'ironwood-php/' + path.relative_to(root).as_posix())
    for filename in ('README.md', 'LICENSE', 'CREDITS.md'):
        archive.write(root / filename, 'ironwood-php/' + filename)
print('Packaged standalone PHP source: _site/ironwood-php.zip')
